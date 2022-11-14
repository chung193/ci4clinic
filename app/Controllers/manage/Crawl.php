<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Product_model;
use App\Models\manage\Shop_Category_model;
use App\Models\manage\Shop_Producer_model;
use App\Models\manage\Seo_model;
use App\Models\manage\Post_model;
use App\Models\manage\Category_model;

class Crawl extends BaseController
{
    public function post()
    {
        helper('simple_html_dom_helper');
        $session = session();
        $subview = 'manage/contents/crawl/crawlpost';
        if($this->request->getPost('url')){
            
            $html = file_get_html($this->request->getPost('url'));
            // echo $html; die();
            $name = $html->find('.thread-title',0)->plaintext;
            $name = htmlspecialchars($name);
            $slug = create_slug($name);
            // echo $slug; die();
            // echo $html;die(); class="content-inner "
            $content  = $html->find('.content', 0); 
            // echo $content; die();

            // lấy hết src của ảnh
            $src = "";
			$img = "";
            foreach($content->find('img') as $val){
                $src = $val->src;
                // echo $src; die();
                $image = explode('/',$src);
                $img = end($image);
                file_put_contents('./public/uploads/post/'.$img, file_get_contents($src));
                break;
            }

            //echo $img;die();
            
            $now = date('Y-m-d H:i:s');
            // echo gettype($name);
            // echo gettype($price);
            // echo create_slug($name);
            // die();
            //echo $slug; die();
            $model = new Post_model();
            $count = $model->countWhere($slug);
            // echo $count; die();
            if($count){
                $slug=$slug.'-'.$count;
            }
            $session = session();
            $data = array(
                'title'  => $name,
                'parentid' => $this->request->getPost('parentid'),
                'authorid' => $session->get('user_id'),
                'slug' => $slug,
                'content' => $content,
                'trash' => 0,
                'img' => $img,
                'published' => $this->request->getPost('published'),
                'publishat' => $this->request->getPost('published')?$now:0,
                'createdat' => $now,
                'updateat' => $now,
            );


            // print_r($data);
            // die();

            
            $model->savePost($data);

            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $name,
                'meta_description' => $name,
                'content_type' => 'post',
                'content_id' => $id_inserted
            );
            $this->setSeoContent($seo);

            $data = array(
                'url'=>$this->request->getPost('url')
            );
            $cat = new Category_model();
            
            $data['category'] = $cat->getCategory();
            $data['test'] = array(
                'subview'   => $subview,
                'title'     => "Crawl",
                'name'      => $session->get('user_name')
            );
        }else{
            $data = array(
                'url'=>''
            );
            $cat = new Category_model();
            
            $data['category'] = $cat->getCategory();
            $data['test'] = array(
                'subview'   => $subview,
                'title'     => "Crawl",
                'name'      => $session->get('user_name')
            );
        }
        echo view('manage/layout',$data);
    }
}