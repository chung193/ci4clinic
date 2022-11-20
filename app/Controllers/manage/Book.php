<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Book_model;
 
class Book extends BaseController
{
    public function index()
    {
        $model = new Book_model();
        $data['book'] = $model->getbook();
        $session = session();
        $subview = '/manage/contents/book/book_view';
        
        $data['test'] = array(
            'subview'   => $subview,
            'title'     => "book",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $model = new Book_model();
        $data['book'] = $model->getbook();
        $data['test'] = array(
            'subview'   => '/manage/contents/book/add_book_view',
            'title'     => "Thêm book",
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
            $model = new Book_model();
            

            $data = array(
                'address'     => $this->request->getPost('address'),
            );
            $model->savebook($data);

            return redirect()->to('/manage/book');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/book/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Book_model();
        $data['book_list'] = $model->getbook();
        $data['book'] = $model->getbook($id)->getRow();
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/book/edit_book_view',
            'title'     => "Sửa book",
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
            $model = new Book_model();

            $data = array(
                'address'     => $this->request->getPost('address'),
            );
            $model->updatebook($data, $id);
            return redirect()->to('/manage/book');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/book/edit/'. $id);
        }
    }

    public function delete($id)
    {
        $model = new Book_model();
        $model->deletebook($id);
        return redirect()->to('/manage/book');
    }

}