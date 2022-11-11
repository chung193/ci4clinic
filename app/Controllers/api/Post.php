<?php

namespace App\Controllers\api;
use App\Models\manage\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Post extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'category0';
        $post_md = new Post_model();
        $data = $post_md->getPost();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Post_model();
        $data = $model->getPost($id);
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        helper('common');

        $model = new Post_model();
        $now = date('Y-m-d H:i:s');
        if($this->request->getVar('slug') == ""){
            $slug = create_slug($this->request->getVar('title'));
        }else{
            $slug = create_slug($this->request->getVar('slug'));
        }
        $count = $model->countWhere($slug);
        if($count){
            $slug=$slug.'-'.$count;
        }
        $data = [
                'title'  => $this->request->getVar('title'),
                'parentid' => $this->request->getVar('parentid'),
                'authorid' => $this->request->getVar('authorid'),
                'description' => $this->request->getVar('description'),
                'slug' => $this->request->getVar('slug'),
                'content' => $this->request->getVar('content'),
                'trash' => 0,
                'img' => $this->request->getVar('img'),
                'published' => $this->request->getVar('published'),
                'publishat' => $this->request->getVar('published')?$now:0,
                'createdat' => $now,
                'updateat' => $now,
        ];
        $model->savePost($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Dữ liệu đã được lưu lại'
            ]
        ];
        return $this->respondCreated($response);
    }

    // update product
   public function update($id = null)
   {
        helper('common');
       $model = new Post_model();
       $input = $this->request->getRawInput();
       $now = date('Y-m-d H:i:s');
        if($this->request->getVar('slug') == ""){
            $slug = create_slug($this->request->getVar('title'));
        }else{
            $slug = create_slug($this->request->getVar('slug'));
        }
        $count = $model->countWhere($slug);
        if($count){
            $slug=$slug.'-'.$count;
        }
        $data = [
                'title'  => $this->request->getVar('title'),
                'parentid' => $this->request->getVar('parentid'),
                'authorid' => $this->request->getVar('authorid'),
                'description' => $this->request->getVar('description'),
                'slug' => $this->request->getVar('slug'),
                'content' => $this->request->getVar('content'),
                'trash' => 0,
                'img' => $this->request->getVar('img'),
                'published' => $this->request->getVar('published'),
                'publishat' => $this->request->getVar('published')?$now:0,
                'createdat' => $now,
                'updateat' => $now,
        ];
       $model->updatePost($data, $id);
       $response = [
           'status'   => 200,
           'error'    => null,
           'messages' => [
               'success' => 'Dữ liệu được cập nhật'
           ]
       ];
       return $this->respond($response);
   }

   // delete
   public function delete($id = null){
        $model = new Post_model();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Bài viết xóa thành công'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Không tồn tại danh mục này');
        }
    }

}
