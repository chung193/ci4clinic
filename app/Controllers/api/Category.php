<?php

namespace App\Controllers\api;



use App\Models\manage\Category_model;
use App\Models\manage\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Category extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'category0';
        $category_md = new Category_model();
        $data = $category_md->getCategory();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Category_model();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        $model = new Category_model();
        // print_r($this->request); die();
        $data = [
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'content' => $this->request->getVar('content'),
        ];
        $model->saveCategory($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Dữ liệu đã được lưu lại'
            ]
        ];
        return $this->respondCreated($response);
    }

    // update category
   public function update($id = null)
   {
    //    echo $this->request->getVar('title');
    //    die();
       $model = new Category_model();
       $input = $this->request->getRawInput();
       $data = [
            'title' => $this->request->getVar('title'),
            'slug' => $this->request->getVar('slug'),
            'content' => $this->request->getVar('content'),
       ];
       $model->updateCategory($data, $id);
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
        $model = new Category_model();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Danh mục xóa thành công'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Không tồn tại danh mục này');
        }
    }

}
