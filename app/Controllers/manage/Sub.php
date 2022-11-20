<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Sub_model;
 
class Sub extends BaseController
{
    public function index()
    {
        $model = new Sub_model();
        $data['sub'] = $model->getsub();
        $session = session();
        $subview = '/manage/contents/sub/sub_view';
        
        $data['test'] = array(
            'subview'   => $subview,
            'title'     => "Đăng ký",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new Sub_model();
        $data['sub'] = $model->getsub();
        $data['test'] = array(
            'subview'   => '/manage/contents/sub/add_sub_view',
            'title'     => "Thêm sub",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'address'  => 'min_length[3]|max_length[2000]',
        ];
         
        if($this->validate($rules)){
            $model = new Sub_model();
            

            $data = array(
                'address'     => $this->request->getPost('address'),
            );
            $model->savesub($data);

            return redirect()->to('/manage/sub');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/sub/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Sub_model();
        $data['sub_list'] = $model->getsub();
        $data['sub'] = $model->getsub($id)->getRow();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/sub/edit_sub_view',
            'title'     => "Sửa sub",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'address'  => 'min_length[3]|max_length[2000]',
        ];
        $id = $this->request->getPost('id');
        if($this->validate($rules)){
            $model = new Sub_model();

            $data = array(
                'address'     => $this->request->getPost('address'),
            );
            $model->updatesub($data, $id);
            return redirect()->to('/manage/sub');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/sub/edit/'. $id);
        }
    }

    public function delete($id)
    {
        $model = new Sub_model();
        $model->deletesub($id);
        return redirect()->to('/manage/sub');
    }

}