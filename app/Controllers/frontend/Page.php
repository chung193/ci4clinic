<?php

namespace App\Controllers\frontend;
use App\Models\frontend\Home_model;
use App\Models\frontend\Ui_model;
use App\Models\frontend\Info_model;
use App\Models\frontend\Slider_model;
use App\Models\frontend\Banner_model;
use App\Models\frontend\Option_model;
use App\Models\frontend\Category_model;
use App\Models\frontend\Post_model;
use App\Models\frontend\Location_model;
use App\Models\frontend\Book_model;
use App\Models\frontend\Page_model;
use App\Models\frontend\PageCat_model;


class Page extends BaseController
{
    public $base; // for some data common
    function __construct()
    {
        $ui_md = new Ui_model();
        $info_md = new Info_model();
        $slider_md = new Slider_model();
        $banner_md = new Banner_model();
        $option_md = new Option_model();
        $category_md = new Category_model();
        $post_md = new Post_model();
        $location_md = new Location_model();
        $page_md = new Page_model();
        $pagecat_md = new PageCat_model();

        $this->base = array(
            'ui' => $ui_md->getUi(),
            'info' => $info_md->getInfo(),
            'slider' => $slider_md->getSlider(),
            'category' => $category_md->getCategory(),
            'post' => $post_md->getPost(),
            'page' => $page_md->getPage(),
            'pagecat' => $pagecat_md->getpagecat(),
            'menu' => $category_md->getCategory(),
            'banner' => $banner_md->getbanner(),
            'location' => $location_md->getlocation(),
            'seo' => array_column($option_md->getOptions(), null, "name") 
        );    
        //print_r($this->base['option']); die();
        $this->session = \Config\Services::session();
        $this->session->start(); 
    }
    
    public function index($slug)
    {
        $page_md = new Page_model();
        $page = $page_md->getPageSlug($slug);
        $seo = $this->getSeoContent($page->id, 'page');
        $this->base['seo'] = $seo;
        // print_r($page);die();
        $data['test'] = array(
            'subview'   => '/frontend/contents/page/page',
            'title'     => $page->title,
            'page' => $page,
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }
}
