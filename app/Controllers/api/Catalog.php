<?php

namespace App\Controllers\api;



use App\Models\manage\Shop_Category_model;
use App\Models\manage\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Catalog extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'category0';
        $category_md = new Shop_Category_model();
        $data = $category_md->getShopCategory();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Shop_Category_model();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        $model = new Shop_Category_model();
        $data = [
            'name' => $this->request->getVar('name'),
            'parent_id' => $this->request->getVar('parent_id'),
            'slug' => $this->request->getVar('slug'),
            'description' => $this->request->getVar('description'),
            'is_default' => $this->request->getVar('is_default'),
        ];
        $model->saveShopCategory($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Dữ liệu đã được lưu lại'
            ]
        ];
        return $this->respondCreated($response);
    }

   public function update($id = null)
   {
       $model = new Shop_Category_model();
       // $input = $this->request->getRawInput();
       
       $data = [
        'name' => $this->request->getVar('name'),
        'parent_id' => $this->request->getVar('parent_id'),
        'slug' => $this->request->getVar('slug'),
        'description' => $this->request->getVar('description'),
        'is_default' => $this->request->getVar('is_default'),
       ];
       $model->updateShopCategory($data, $id);
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
        $model = new Shop_Category_model();
        $data = $model->deleteShopCategory($id);
        if($data){
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
