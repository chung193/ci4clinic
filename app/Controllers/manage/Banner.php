<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Banner_model;
 
class Banner extends BaseController
{
    public function index()
    {
        $model = new Banner_model();
        $data['banner'] = $model->getbanner();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/banner/banner_view_editor';
        }else{
            $subview = '/manage/contents/banner/banner_view';
        }
        $data['test'] = array(
            'subview'   => $subview,
            'title'     => "Banner",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new banner_model();
        $data['banner'] = $model->getbanner();
        $data['test'] = array(
            'subview'   => '/manage/contents/banner/add_banner_view',
            'title'     => "Thêm banner",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'text_main'      => 'required|max_length[600]',
            'text_sub'      => 'required|max_length[600]',
            'url'  => 'min_length[3]|max_length[2000]',
            'location'  => 'min_length[3]|max_length[2000]',
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){
            $model = new Banner_model();
            
            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/banner/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            $data = array(
                'text_main'     => $this->request->getPost('text_main'),
                'text_sub' => $this->request->getPost('text_sub'),
                'url' => $this->request->getPost('url'),
                'img' => $basename,
                'location' => $this->request->getPost('location'),
            );
            $model->savebanner($data);

            return redirect()->to('/manage/banner');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/banner/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Banner_model();
        $data['banner_list'] = $model->getbanner();
        $data['banner'] = $model->getbanner($id)->getRow();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/banner/edit_banner_view',
            'title'     => "Sửa banner",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'text_main'      => 'required|max_length[600]',
            'text_sub'      => 'required|max_length[600]',
            'url'  => 'min_length[3]|max_length[2000]',
            'location'  => 'min_length[3]|max_length[2000]',
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
            $model = new Banner_model();
            
            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = $this->request->getPost('img_old');
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/banner/');
                    $basename = $img->getName();
                }
            }else{
                $basename = $this->request->getPost('img_old');
            }

           

            $data = array(
                'text_main'     => $this->request->getPost('text_main'),
                'text_sub' => $this->request->getPost('text_sub'),
                'url' => $this->request->getPost('url'),
                'img' => $basename,
                'location' => $this->request->getPost('location'),
            );
            $model->updatebanner($data, $id);
            return redirect()->to('/manage/banner');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/banner/edit/'. $id);
        }
    }

    public function delete($id)
    {
        $model = new Banner_model();
        $model->deletebanner($id);
        return redirect()->to('/manage/banner');
    }

}