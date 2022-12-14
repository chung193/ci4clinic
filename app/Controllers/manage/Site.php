<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Option_model;
 
class Site extends BaseController
{
    public function __construct()
    {
        if (!session()->get('user_is_superadmin')) {
            echo '<h1>Access denied</h1>';
            exit;
        }
    }

    public function index()
    {
        $model = new Option_model();
        $data['option'] = array_column($model->getOption(), null, "name");
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/options/option_view',
            'title'     => "Cấu hình trang",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }

 
    public function save()
    {
        $model = new Option_model();
        $data = $this->request->getPost();
        $flag = false;
        foreach($data['data'] as $key  => $val){
            if($key == "'site_status'"){
                $flag = true;
            }
        }
        if(!$flag){
            $data['data']["'site_status'"] = 0;
        }
        // print_r($data['data']);
        // die();
        $model->updateOption($data);
        return redirect()->to('/manage/options');
    }
}