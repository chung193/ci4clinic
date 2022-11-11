<?php

namespace App\Controllers\api;



use App\Models\manage\Status_model;
use App\Models\manage\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Status extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'status0';
        $status_md = new Status_model();
        $data = $status_md->getstatus();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Status_model();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        $model = new Status_model();
        // print_r($this->request);die();
        // print_r($_POST);die();
        
        $data = [
            'name' => $this->request->getVar('name'),
        ];
        $model->savestatus($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Dữ liệu đã được lưu lại'
            ]
        ];
        return $this->respondCreated($response);
    }

    // update status
   public function update($id = null)
   {
    //    echo $this->request->getVar('title');
    //    die();
       $model = new Status_model();
       $data = [
        'name' => $this->request->getVar('name'),
    ];
       $model->updatestatus($data, $id);
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
        $model = new Status_model();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Dữ liệu xóa thành công'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Không tồn tại dữ liệu này');
        }
    }

}
