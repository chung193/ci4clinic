<?php

namespace App\Controllers\api;
use App\Models\frontend\Home_model;
use App\Models\frontend\Ui_model;
use App\Models\frontend\Info_model;

use App\Models\frontend\Shop_Category_model;
use App\Models\frontend\Shop_Slider_model;
use App\Models\frontend\Shop_Product_model;
use App\Models\frontend\Banner_model;
use App\Models\frontend\Option_model;
use App\Models\frontend\Page_model;
use App\Models\frontend\Seo_model;
use App\Models\frontend\Category_model;
use App\Models\frontend\Post_model;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Manage extends ResourceController
{
    protected $format = 'json';
    public function category($slug=false)
    {
        $category_md = new Category_model();
        return $this->respond($category_md->getCategory($slug));
    }

    public function post($slug=false)
    {
        $post_md = new Post_model();
        return $this->respond($post_md->getPost($slug));
    }

    public function catalog($slug=false)
    {
        $catalog_md = new Shop_Category_model();
        if($slug){
            return $this->respond($catalog_md->getShopCategorySlug($slug));
        }else{
            return $this->respond($catalog_md->getShopCategory());
        }
        
    }

    public function product($slug=false)
    {
        $product_md = new Shop_Product_model();
        if($slug){
            return $this->respond($product_md->getShopProductSlug($slug));
        }else{
            return $this->respond($product_md->getAllProduct());
        } 
    }

    public function catalog_product($slug=false)
    {
        $product_md = new Shop_Product_model();
        if($slug){
            return $this->respond($product_md->getShopProductCatalog($slug));
        }else{
            return $this->respond($product_md->getAllProduct());
        } 
    }
}
