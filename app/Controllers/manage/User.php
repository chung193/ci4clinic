<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\User_model;
use CodeIgniter\Files\File;

class User extends BaseController
{
    public function __construct()
    {
        if (!session()->get('user_is_superadmin')) {
            echo '<h1>Access denied</h1>';
            exit;
        }
    }

    public function index()
    {
        $model = new User_model();
        $data['user'] = $model->getUser();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/user/user_view',
            'title'     => "Quản trị viên",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/user/add_user_view',
            'title'     => "Thêm quản trị viên",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }

    public function save()
    {
        $validationRule = [
            'nicename'  => ['label'=>'Tên hiển thị','rules'=>'required|max_length[55]'],
            'email'      => ['label'=>'Email','rules'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]'],
            'profile'=> ['label'=>'Mô tả','rules'=>'min_length[6]|max_length[200]'],
            'password'      => ['label'=>'Mật khẩu','rules'=>'required|min_length[6]|max_length[200]'],
            'confpassword'  => ['label'=>'xác nhận mật khẩu','rules'=>'matches[password]'],
            'userimage' => [
                'label' => 'Image File',
                'rules' => 'is_image[userimage]'
                    . '|mime_in[userimage,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userimage,102400]'
                    . '|max_dims[userimage,204800, 204800]',
            ],
        ];

        if (! $this->validate($validationRule)) {
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/user/add/');
        }

        $img = $this->request->getFile('userimage');
        if($this->request->getFile('userimage') != ""){
            if ($img->isValid() && !$img->hasMoved()) {

                $img->move(ROOTPATH.'/public/uploads/user/');
                $basename = $img->getName();
                $model = new User_model();
                $data = array(
                    'firstname'  => $this->request->getPost('firstname'),
                    'middlename' => $this->request->getPost('middlename'),
                    'lastname' => $this->request->getPost('lastname'),
                    'nicename' => $this->request->getPost('nicename'),
                    'email' => $this->request->getPost('email'),
                    'profile' => $this->request->getPost('profile'),
                    'role' => $this->request->getPost('role'),
                    'userimage' => $basename,
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                );
                $model->saveUser($data);
                return redirect()->to('/manage/user');
            } else {
                $data = ['errors' => 'The file has already been moved.'];
            }
        }else{
                $model = new User_model();
                $data = array(
                    'firstname'  => $this->request->getPost('firstname'),
                    'middlename' => $this->request->getPost('middlename'),
                    'lastname' => $this->request->getPost('lastname'),
                    'nicename' => $this->request->getPost('nicename'),
                    'email' => $this->request->getPost('email'),
                    'profile' => $this->request->getPost('profile'),
                    'role' => $this->request->getPost('role'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                );
                $model->saveUser($data);
                return redirect()->to('/manage/user');
        }
    }

    public function edit($id)
    {
        $model = new User_model();
        $data['user'] = $model->getUser($id)->getRow();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/user/edit_user_view',
            'title'     => "Sửa thông tin quản trị viên",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $validationRule = [
            'nicename'  => ['label'=>'Tên hiển thị','rules'=>'required|max_length[55]'],
            'email'      => ['label'=>'Email','rules'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]'],
            'profile'=> ['label'=>'Mô tả','rules'=>'min_length[6]|max_length[200]'],
            'password'      => ['label'=>'Mật khẩu','rules'=>'required|min_length[6]|max_length[200]'],
            'confpassword'  => ['label'=>'xác nhận mật khẩu','rules'=>'matches[password]'],
            'userimage' => [
                'label' => 'Image File',
                'rules' => 'is_image[userimage]'
                    . '|mime_in[userimage,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userimage,102400]'
                    . '|max_dims[userimage,204800, 204800]',
            ],
        ];

        $id = $this->request->getPost('id');

        if (! $this->validate($validationRule)) {
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/user/edit/'.$id);
        }
        
        if($this->request->getFile('userimage') !== ""){
                
                $img = $this->request->getFile('userimage');

                if ($img->isValid() && !$img->hasMoved()) {
        
                    $img->move(ROOTPATH.'/public/uploads/user/');
                    $basename = $img->getName();

                    $model = new User_model();
                    $id = $this->request->getPost('id');
                    
                    $data = array(
                        'firstname'  => $this->request->getPost('firstname'),
                        'lastname' => $this->request->getPost('lastname'),
                        'middlename' => $this->request->getPost('middlename'),
                        'email' => $this->request->getPost('email'),
                        'profile' => $this->request->getPost('profile'),
                        'nicename' => $this->request->getPost('nicename'),
                        'role' => $this->request->getPost('role'),
                        'userimage' => $basename,
                    );
                    if($this->request->getVar('password') !== '')
                    {
                        $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                    }
                    $model->updateUser($data, $id);
                    return redirect()->to('/manage/user');
            }else{
                    $model = new User_model();                    
                    $data = array(
                        'firstname'  => $this->request->getPost('firstname'),
                        'lastname' => $this->request->getPost('lastname'),
                        'middlename' => $this->request->getPost('middlename'),
                        'email' => $this->request->getPost('email'),
                        'role' => $this->request->getPost('role'),
                        'nicename' => $this->request->getPost('nicename'),
                        'profile' => $this->request->getPost('profile'),
                    );
                    if($this->request->getVar('password') !== '')
                    {
                        $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                    }
                    $model->updateUser($data, $id);
                    return redirect()->to('/manage/user');
            }
        }
    }

    public function delete($id)
    {
        $model = new User_model();
        $model->deleteUser($id);
        return redirect()->to('/manage/user');
    }

}