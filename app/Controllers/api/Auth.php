<?php

namespace App\Controllers\api;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

use App\Models\manage\User_model;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Auth extends ResourceController
{
    protected $format = 'json';
    
    public function login()
    {
        helper(['form']);
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new User_model();
        $user = $model->where("email", $this->request->getVar('email'))->first();

        if(!$user) return $this->failNotFound('Email không tồn tại');
 
        $verify = password_verify($this->request->getVar('password'), $user['password']);

        if(!$verify) return $this->fail('Mật khẩu sai');
 
        $key = getenv('TOKEN_SECRET');
        //$iat = time(); // current timestamp value
        //$exp = $iat + 3600;
        $iat = 1356999524;
        $nbf = 1357000000;
        $payload = array(
            "nbf" => $nbf,
            "iat" => $iat, //Time the JWT issued at
            "uid" => $user['id'],
            "email" => $user['email']
        );
        
 
        $token = JWT::encode($payload, $key, 'HS256');

        return $this->respond($token);
    }

    public function register(){

        helper(['form']);
        $rules = [
            'nicename' => 'required',
            'email' => 'required|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[6]',
            'confpassword' => 'matches[password]'
        ];
        
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());

        // return $this->respond('bla bla');

        $data = [
            'nicename'  => $this->request->getVar('nicename'),
            'email'     => $this->request->getVar('email'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT) 
        ];
        
        $model = new User_model();
        $registered = $model->save($data);
        $this->respondCreated($registered);
    }

    public function me()
    {
        $key = getenv('TOKEN_SECRET');
        $header = $this->request->getServer('HTTP_AUTHORIZATION'); // HTTP_AUTHORIZATION
        // print_r($header); die();
        if(!$header) return $this->failUnauthorized('Token Required');
        $token = explode(' ', $header)[1];
        // echo $token; die();
        try {
            $decoded = JWT::decode($token, new Key($key, 'HS256'));
            $response = [
                'id' => $decoded->uid,
                'email' => $decoded->email
            ];
            return $this->respond($response);
        } catch (\Throwable $th) {
            return $this->fail('Invalid Token');
        }
    }
}
