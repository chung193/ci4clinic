<?php

namespace App\Controllers\api;



use App\Models\manage\Reason_model;
use App\Models\manage\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Reason extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'reason0';
        $reason_md = new Reason_model();
        $data = $reason_md->getreason();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Reason_model();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        $model = new Reason_model();
        // print_r($this->request);die();
        // print_r($_POST);die();
        $data = [
            'reason' => $this->request->getVar('reason'),
            'id_staff' => $this->request->getVar('id_staff'),
        ];
        $model->savereason($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Dữ liệu đã được lưu lại'
            ]
        ];
        return $this->respondCreated($response);
    }

    // update reason
   public function update($id = null)
   {
    //    echo $this->request->getVar('title');
    //    die();
       $model = new Reason_model();
       $data = [
            'reason' => $this->request->getVar('reason'),
            'id_staff' => $this->request->getVar('id_staff'),
        ];
       $model->updatereason($data, $id);
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
        $model = new Reason_model();
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
