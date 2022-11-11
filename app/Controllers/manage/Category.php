<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Category_model;
use App\Models\manage\Seo_model;

class Category extends BaseController
{
    
    public function index()
    {
        $model = new Category_model();
        $data['category'] = $model->getCategory();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/category/category_view_editor';
        }else{
            $subview = '/manage/contents/category/category_view';
        }
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
        $model = new Category_model();
        $data['category'] = $model->getCategory();
        $data['test'] = array(
            'subview'   => '/manage/contents/category/add_category_view',
            'title'     => "Thêm danh mục",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'title'      => ['label' => 'Tiêu đề','rules' =>'required|max_length[600]'],
        ];
         
        if($this->validate($rules)){
            $model = new Category_model();
            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('title'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }


            $data = array(
                'title'     => $this->request->getPost('title'),
                'parent_id'     => $this->request->getPost('parent_id'),
                'slug' => $slug,
                'content' => $this->request->getPost('content'),
                'show_in_menu' => $this->request->getPost('show_in_menu')?1:0,
            );

            // print_r($data);die();
            $model->saveCategory($data);
            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $this->request->getPost('meta_title'),
                'meta_description' => $this->request->getPost('meta_description'),
                'content_type' => 'category',
                'content_id' => $id_inserted
            );

            $this->setSeoContent($seo);
            
            return redirect()->to('/manage/category');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/category/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Category_model();
        $data['category_list'] = $model->getCategory();
        $data['category'] = $model->getCategory($id)->getRow();
        $seo = $this->getSeoContent($id, 'category')->getRow();
        //print_r($seo);die();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/category/edit_category_view',
            'title'     => "Sửa danh mục",
            'seo' => $seo,
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'title' => ['label' => 'Tiêu đề','rules' =>'required|max_length[600]'],
        ];

        $id = $this->request->getPost('id');
         
        if($this->validate($rules)){
            $model = new Category_model();

            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('title'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }
            $data = array(
                'title'  => $this->request->getPost('title'),
                'parent_id'     => $this->request->getPost('parent_id'), 
                'slug' => $this->request->getPost('slug'),
                'content' => $this->request->getPost('content'),
                'show_in_menu' => $this->request->getPost('show_in_menu')?1:0,
            );
            $model->updateCategory($data, $id);

             // cập nhật data seo
             $seo_model = new Seo_model();
             $seo_item = $seo_model->getseo($id, 'category')->getRow();
             $seo = array(
                 'meta_title' => $this->request->getPost('meta_title'),
                 'meta_description' => $this->request->getPost('meta_description'),
                 'content_type' => 'category',
                 'content_id' => $id
             );
             // print_r($seo);die();
             $this->updateSeoContent($seo, $seo_item->id);
            return redirect()->to('/manage/category');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/category/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new Category_model();
        $model->deleteCategory($id);
        return redirect()->to('/manage/category');
    }

}