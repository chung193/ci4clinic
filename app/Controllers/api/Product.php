<?php

namespace App\Controllers\api;



use App\Models\manage\Shop_Product_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Product extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'category0';
        $category_md = new Shop_Product_model();
        $data = $category_md->getShopProduct();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Shop_Product_model();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        $model = new Shop_Product_model();
        helper('common');
        // ảnh đại diện

        if($this->request->getPost('published')){
            $published = $this->request->getPost('published');
        }else{
            $published = 0;
        }

        $now = date('Y-m-d H:i:s');
        // Nhiều ảnh
        if($this->request->getFile('img') != ""){
            $img = $this->request->getFile('img');
            $basename = '';
            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(ROOTPATH.'/public/uploads/product/');
                $basename = $img->getName();
            }
        }else{
            $basename = '';
        }

        // echo !empty($this->request->getFileMultiple('img_list'));
        // die();
        $temp = '';
        if (!empty($this->request->getFileMultiple('img_list'))) {
            
            foreach($this->request->getFileMultiple('img_list') as $file)
            {   

                $file->move(ROOTPATH.'/public/uploads/product/');

                $temp = $temp.$file->getClientName().',';
            }
        }

        if($this->request->getVar('slug') == ""){
            $slug = create_slug($this->request->getVar('name'));
        }else{
            $slug = create_slug($this->request->getVar('slug'));
        }

        $data = array(
            'name'  => $this->request->getVar('name'),
            'summary' => $this->request->getVar('summary'),
            'category_id' => $this->request->getVar('category_id'),
            'producer_id' => $this->request->getVar('producer_id'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'show_price' => $this->request->getVar('show_price'),
            'id_discount' => $this->request->getVar('id_discount'),
            'slug' => $slug,
            'img' => $basename,
            'img_list' => $temp, 
            'published' => $published ,
            'created_at' => $now,
            'updated_at' => $now,
        );
        $model->saveShopProduct($data);
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
    
    $model = new Shop_Product_model();
    helper('common');
    // ảnh đại diện
    // $input = $this->request->getRawInput();
    // foreach($input as $key => $val){
    //     echo $key.'=>'.$val;
    // }
    // echo $this->request->getVar('name'); die();
    $request = $this->request;
    print_r($request);
    die();
    if($this->request->getVar('published')){
        $published = $this->request->getVar('published');
    }else{
        $published = 0;
    }

    $now = date('Y-m-d H:i:s');
    // Nhiều ảnh
    if($this->request->getFile('img') != ""){
        $img = $this->request->getFile('img');
        $basename = '';
        if ($img->isValid() && !$img->hasMoved()) {
            $img->move(ROOTPATH.'/public/uploads/product/');
            $basename = $img->getName();
        }
    }else{
        $basename = '';
    }

    // echo !empty($this->request->getFileMultiple('img_list'));
    // die();
    $temp = '';
    if (!empty($this->request->getFileMultiple('img_list'))) {
        
        foreach($this->request->getFileMultiple('img_list') as $file)
        {   

            $file->move(ROOTPATH.'/public/uploads/product/');

            $temp = $temp.$file->getClientName().',';
        }
    }

    if($this->request->getVar('slug') == ""){
        $slug = create_slug($this->request->getVar('name'));
    }else{
        $slug = create_slug($this->request->getVar('slug'));
    }

    $data = array(
        'name'  => $this->request->getVar('name'),
        'summary' => $this->request->getVar('summary'),
        'category_id' => $this->request->getVar('category_id'),
        'producer_id' => $this->request->getVar('producer_id'),
        'description' => $this->request->getVar('description'),
        'price' => $this->request->getVar('price'),
        'show_price' => $this->request->getVar('show_price'),
        'id_discount' => $this->request->getVar('id_discount'),
        'slug' => $slug,
        'img' => $basename,
        'img_list' => $temp, 
        'published' => $published ,
        'created_at' => $now,
        'updated_at' => $now,
    );

    print_r($data); die();
       $model->updateshopproduct($data, $id);
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
        $model = new Shop_Product_model();
        $data = $model->deleteShopProduct($id);
        if($data){
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Sản phẩm xóa thành công'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Không tồn tại sản phẩm này');
        }
    }

}
