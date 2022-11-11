<?php

namespace App\Controllers\api;



use App\Models\manage\Staff_model;
use App\Models\manage\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Staff extends ResourceController
{
    protected $format = 'json';
    use ResponseTrait;

    public function index()
    {
        // echo 'staff0';
        $staff_md = new Staff_model();
        $data = $staff_md->getstaff();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu');
        } 
    }

    public function show($id = null)
    {
        $model = new Staff_model();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Không có dữ liệu với id '.$id);
        }
    }

    public function create()
    {
        $model = new Staff_model();
        // print_r($this->request);die();
        // print_r($_POST);die();
        
        $now = date('Y-m-d H:i:s');
        $data = [
            'name' => $this->request->getVar('name'),
            'bod' => $this->request->getVar('bod'),
            'gender' => $this->request->getVar('gender'),
            'email' => $this->request->getVar('email'),
            'mobile' => $this->request->getVar('mobile'),
            'media' => $this->request->getVar('media'),
            'join_date' => $now,
        ];
        $model->savestaff($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Dữ liệu đã được lưu lại'
            ]
        ];
        return $this->respondCreated($response);
    }

    // update staff
   public function update($id = null)
   {
    //    echo $this->request->getVar('title');
    //    die();
       $model = new Staff_model();
       $input = $this->request->getRawInput();
       $now = date('Y-m-d H:i:s');
       $data = [
        'name' => $this->request->getVar('name'),
        'bod' => $this->request->getVar('bod'),
        'gender' => $this->request->getVar('gender'),
        'email' => $this->request->getVar('email'),
        'mobile' => $this->request->getVar('mobile'),
        'media' => $this->request->getVar('media'),
        'join_date' => $now,
    ];
       $model->updatestaff($data, $id);
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
        $model = new Staff_model();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Dữ liệu nhân viên xóa thành công'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('Không tồn tại nhân viên này');
        }
    }

}
