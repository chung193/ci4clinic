<?php

namespace App\Controllers\frontend;
use App\Models\frontend\Sub_model;

class Sub extends BaseController
{

    public function save()
    {
        $sub_md = new Sub_model();

        $rules = [
            'email' => 'required|valid_email'
        ];
        if($this->validate($rules)){
            $data=array('email' => $this->request->getPost('email'));
            $sub_md->savesub($data);
            $session = session();
            $session->setFlashdata('msg', "Bạn đã đăng ký thành công");
            return redirect()->back();
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->back();
        }
    }
}
