<?php namespace App\Controllers\auth;
 
use CodeIgniter\Controller;
use App\Models\manage\User_model;
use App\Models\manage\Option_model;
 
class Forgot extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('auth/forgot');
    } 
 
    public function sendresetlink()
    {
        helper(['string']);
        $userModel = new User_model();
        $toEmail = $this->request->getVar('email');
        $row = $userModel->getUserByEmail($toEmail);
        // print_r($row);
        // die();
        if ($row) {
            try {
                $email = \Config\Services::email();
                $optionModel = new Option_model();

                $option = array_column($optionModel->getOption(), null, "name");
                //print_r($option);die();
                // config sendmail
                $config['protocol'] = $option['mail_protocol']['value'];
                $config['SMTPHost'] = $option['mail_SMTPHost']['value'];
                $config['SMTPUser']  = $option['mail_user']['value'];
                $config['SMTPPass'] = $option['mail_password']['value'];
                $config['SMTPPort'] = $option['mail_SMTPPort']['value'];
                $config['SMTPCrypto'] = $option['mail_SMTPCrypto']['value'];

                $email->initialize($config);

                $date = getServerTimestamp();
                $token = generate_token();
                $id = $row["id"];
                $url   = generate_url("auth/redirect", $id, $token);
                $link  = "<a href='".$url."'>reset password</a>";

                $subject = "Khôi phục mật khẩu";
                $message = "Email khôi phục mật khẩu yêu cầu ngày {$date} \r\n, vui lòng nhấn vào đường link dưới đây ". $link;
                
                
                
                $email->setTo($toEmail);
                $email->setFrom($option['site_mail']['value'], 'Xác nhận lấy lại mật khẩu');
                
                $email->setSubject($subject);
                $email->setMessage($message);

                

                if ($email->send()) 
                {
                    echo view('auth/emailsend');
                    $data = ['token' => $token, 'token_active' => 1, 'token_date' => getServerTimestamp()];
                    $userModel->updateUser($data, $id);
                } 
                else 
                {
                    $data = $email->printDebugger(['headers']);
                    print_r($data);
                }
            } catch (Exception $e) {
                $error = $mail->ErrorInfo;
                $session = session();
                $session->setFlashdata('msg', $error);
            }
        } else {
            $session = session();
            $session->setFlashdata('msg', "Địa chỉ email không tồn tại");
            return redirect()->to('/auth/forgot');
        }
    }

    //---------------------------->->- Reset password : step 2  
    public function loadresetpage($id, $token)
    {
        $userModel = new User_model();
        $row = $userModel->findById($id);
        helper(['string']);
        if ($row) {
            if (isValidToken($row, $token)) {
                $data = array('id' => $id, 'token' => $token);
                echo view('auth/resetpassword', $data); // return view => call a view , return redirect => route
                //    return redirect()->to('ResetPwdController');
            } else {
                echo "<h1>Lỗi: Bad link !</h1>";
            }
        } else {
            echo "<h1>Lỗi: Bad user !</h1>";
            return 0;
        }
    }

    //------------------------------ Reset password : step 3
    public function updatepassword()
    {
        helper(['string']);
        $rules = [
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[4]|max_length[50]|alpha_numeric',
                'errors' => [
                    'required' => 'password is required',
                    'min_length' => 'min length is 5',
                    'max_length' => 'max length is 50',
                    'alpha_numeric' => 'add alpha and numeric',
                ]
            ],
            'confpwd' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Gõ lại mật khẩu',
                    'matches' => 'Mật khẩu không khớp',
                ],
            ]
        ];

        if ($this->validate($rules)) {
            $userModel = new User_model();
            $id = $this->request->getVar('id');
            $token = $this->request->getVar('token');
            $row = $userModel->findById($id);
            if ($row) {
                if (isValidToken($row, $token)) {
                    $data = [
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                        'token_active' => 0,
                        'token' => '',
                        'token_date' => ''
                    ];
                    $userModel->updateUser($data, $id);
                    echo view('auth/passwordchangesuccess');
                } else {
                    echo '<h1>token sau hoặc link đã hết hạn</h1>';
                }
            } else {
                echo '<h1>link lỗi</h1>';
            }
        } else {
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/auth/updatepassword');
        }
    }
} 