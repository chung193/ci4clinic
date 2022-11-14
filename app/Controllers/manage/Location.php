<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\location_model;
 
class Location extends BaseController
{
    public function index()
    {
        $model = new location_model();
        $data['location'] = $model->getlocation();
        $session = session();
        $subview = '/manage/contents/location/location_view';
        
        $data['test'] = array(
            'subview'   => $subview,
            'title'     => "location",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new location_model();
        $data['location'] = $model->getlocation();
        $data['test'] = array(
            'subview'   => '/manage/contents/location/add_location_view',
            'title'     => "Thêm location",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'address'  => 'min_length[3]|max_length[2000]',
        ];
         
        if($this->validate($rules)){
            $model = new location_model();
            

            $data = array(
                'address'     => $this->request->getPost('address'),
            );
            $model->savelocation($data);

            return redirect()->to('/manage/location');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/location/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new location_model();
        $data['location_list'] = $model->getlocation();
        $data['location'] = $model->getlocation($id)->getRow();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/location/edit_location_view',
            'title'     => "Sửa location",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'address'  => 'min_length[3]|max_length[2000]',
        ];
        $id = $this->request->getPost('id');
        if($this->validate($rules)){
            $model = new location_model();

            $data = array(
                'address'     => $this->request->getPost('address'),
            );
            $model->updatelocation($data, $id);
            return redirect()->to('/manage/location');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/location/edit/'. $id);
        }
    }

    public function delete($id)
    {
        $model = new location_model();
        $model->deletelocation($id);
        return redirect()->to('/manage/location');
    }

}