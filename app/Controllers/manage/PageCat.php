<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\PageCat_model;
use App\Models\manage\Seo_model;

class PageCat extends BaseController
{
    
    public function index()
    {
        $model = new PageCat_model();
        $data['pagecat'] = $model->getpagecat();
        $session = session();
        $subview = '/manage/contents/pagecat/pagecat_view';
        
        $data['test'] = array(
            'subview'   => $subview,
            'title'     => "Danh mục",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new PageCat_model();
        $data['test'] = array(
            'subview'   => '/manage/contents/pagecat/add_pagecat_view',
            'title'     => "Thêm danh mục",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'name'      => ['label' => 'Tiêu đề','rules' =>'required|max_length[600]'],
        ];
         
        if($this->validate($rules)){
            $model = new PageCat_model();
           
            $data = array(
                'name'     => $this->request->getPost('name')
            );

            // print_r($data);die();
            $model->savepagecat($data);
            
            return redirect()->to('/manage/pagecat');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/pagecat/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new PageCat_model();
        $data['pagecat'] = $model->getpagecat($id)->getRow();
        //print_r($seo);die();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/pagecat/edit_pagecat_view',
            'title'     => "Sửa danh mục",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'name' => ['label' => 'Tiêu đề','rules' =>'required|max_length[600]'],
        ];

        $id = $this->request->getPost('id');
         
        if($this->validate($rules)){
            $model = new PageCat_model();

            $data = array(
                'name'  => $this->request->getPost('name')
            );
            $model->updatepagecat($data, $id);
            return redirect()->to('/manage/pagecat');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/pagecat/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new PageCat_model();
        $model->deletepagecat($id);
        return redirect()->to('/manage/pagecat');
    }

}