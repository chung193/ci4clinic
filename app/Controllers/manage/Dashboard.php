<?php 
namespace App\Controllers\manage; 
use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        // data count
        $order = 
        $data['test'] = array(
            'subview'   => '/manage/contents/test',
            'title'     => "Dashboard",
            'name'      => $session->get('user_name')
        );
        

        echo view('manage/layout', $data);
    }
}