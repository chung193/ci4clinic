<?php

namespace App\Controllers\frontend;
use App\Models\frontend\Book_model;

class Book extends BaseController
{

    public function save()
    {
        $md = new Book_model();
        // print_r($this->request);die();
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'date' => 'required'
        ];
        if($this->validate($rules)){
            $data=array(
                'name' => $this->request->getPost('name'),
                'phone' => $this->request->getPost('phone'),
                'location' => $this->request->getPost('location'),
                'date' => $this->request->getPost('date'),
                'message' => $this->request->getPost('message')
            );
            //print_r($data); die();
            $md->savebook($data);
            $session = session();
            $session->setFlashdata('msg', "Bạn đã đăng ký thành công");
            return redirect()->back();
        }else{
            $session = session();
            $session->setFlashdata('msgErr', $this->validator->listErrors());
            return redirect()->back();
        }
    
    }
}
