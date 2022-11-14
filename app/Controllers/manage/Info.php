<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Info_model;

class Info extends BaseController
{
    public function index()
    {
        $model = new Info_model();
        $data['info'] = $model->getInfo();

        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/info/edit_info_view',
            'title'     => "Thông tin cửa hàng",
            'name'      => $session->get('user_name')
        );
        // print_r($data['info'] );die();
        echo view('manage/layout',$data);
    }

    public function update()
    {
        
        $rules = [
            'name'  => ['label' => 'Tên shop','rules' =>'min_length[3]|max_length[2000]'],
            'phone'   => ['label' => 'Số điện thoại','rules' =>'required|numeric'],
            'address'=>  ['label' => 'Địa chỉ','rules' =>'required|min_length[6]'],
            'email'       => ['label' => 'Email','rules' =>'max_length[255]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];

        $id = $this->request->getPost('id');

        if($this->validate($rules)){

            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = $this->request->getPost('logo_old');
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/logo/');
                    $basename = $img->getName();
                }
            }else{
                $basename = $this->request->getPost('logo_old');
            }

            if($this->request->getFile('favicon') !== ""){
                $img = $this->request->getFile('favicon');
                $favicon = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/favicon/');
                    $favicon = $img->getName();
                }
            }else{
                $favicon = $this->request->getPost('favicon_old');
            }

            $model = new Info_model();
            
            $data = array(
                'name'  => $this->request->getPost('name'),
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'logo' => $basename,
                'favicon' => $favicon
            );

            $model->updateInfo($data, $id);
            return redirect()->to('/manage/info');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/info/');
        }
    }

}