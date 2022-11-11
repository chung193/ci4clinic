<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Slider_model;

class ShopSlider extends BaseController
{
    public function index()
    {
        $model = new Shop_Slider_model();
        $data['slider'] = $model->getSlider();

        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/shopslider/shop_slider_view',
            'title'     => "Slider",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $data['test'] = array(
            'subview'   => '/manage/contents/shopslider/add_shop_slider_view',
            'title'     => "Thêm Slider",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'main_title'      => ['label'=>'Tiêu đề chính','rules'=>'required|min_length[3]|max_length[600]'],
            'sub_title'  => ['label'=>'Tiêu đề phụ','rules'=>'min_length[3]|max_length[2000]'],
            'url'   => ['label'=>'URL','rules'=>'min_length[3]|max_length[2000]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){
           

            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/slider/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            $model = new Shop_Slider_model();

            $session = session();

            $data = array(
                'main_title'  => $this->request->getPost('main_title'),
                'sub_title' => $this->request->getPost('sub_title'),
                'url' => $this->request->getPost('url'),

                'img' => $basename,
            );
            $model->saveSlider($data);
            return redirect()->to('/manage/shop-slider');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-slider/add/');
        }
    }

    public function edit($id)
    {
        
            $model = new Shop_Slider_model();
            $data['slider'] = $model->getSlider($id)->getRow();
            $session = session();
            $data['test'] = array(
                'subview'   => '/manage/contents/shopslider/edit_shop_slider_view',
                'title'     => "Sửa Slider",
                'name'      => $session->get('user_name')
            );
            echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'main_title'      => ['label'=>'Tiêu đề chính','rules'=>'required|min_length[3]|max_length[600]'],
            'sub_title'  => ['label'=>'Tiêu đề phụ','rules'=>'min_length[3]|max_length[2000]'],
            'url'   => ['label'=>'URL','rules'=>'min_length[3]|max_length[2000]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];

        $id = $this->request->getPost('id');
        if($this->validate($rules)){

            $model = new Shop_Slider_model();

            if($this->request->getFile('image') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/slider/');
                    $basename = $img->getName();
                }
            }else{
                $basename = $this->request->getPost('old_img');
            }
            

            if ($basename  == ''){
                $basename = $this->request->getPost('old_img');
            }
            
            $data = array(
                'main_title'  => $this->request->getPost('main_title'),
                'sub_title' => $this->request->getPost('sub_title'),
                'url' => $this->request->getPost('url'),

                'img' => $basename,
            );


            $model->updateSlider($data, $id);
            return redirect()->to('/manage/shop-slider');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-slider/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new Shop_Slider_model();
        $model->deleteSlider($id);
        return redirect()->to('/manage/shop-slider');
    }

}