<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Ui_model;

class Ui extends BaseController
{
    public function index()
    {
        $model = new Ui_model();
        $data['ui'] = $model->getUi();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/ui/edit_ui_view',
            'title'     => "Shop Ui",
            'name'      => $session->get('user_name')
        );
        // print_r($data['ui']->text_top_header);die();
        echo view('manage/layout',$data);
    }

 
    public function update()
    {
        
        $rules = [
            'text_top_header' => ['label'=>'Text trên cùng','rules'=> 'required|min_length[3]|max_length[600]'],
        ];

        $id = $this->request->getPost('id');

        if($this->validate($rules)){

            $model = new Ui_model();

            $data = array(
                'text_top_header'  => $this->request->getPost('text_top_header'),
            );

            $model->updateUi($data, $id);
            return redirect()->to('/manage/ui');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/ui');
        }
    }

}