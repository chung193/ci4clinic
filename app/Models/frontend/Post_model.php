<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Post_model extends Model
{
    
    public function getPost(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getPostSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->select('post.*, category.title as cattitle, category.slug as catslug');
        $builder->join('category','category.id = post.parentid');
        $builder->where('post.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getPostCatCount(){
        $db      = \Config\Database::connect();
        $builder = $db->table('category');
        $builder->select('category.*, count(post.id) as num');
        $builder->join('post','category.id = post.parentid');
        $builder->groupBy('category.id');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getPostIdSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->where('post.slug', $slug);
        $query = $builder->get();
        return $query->getRow()->id;
    }
    
    public function getRecentPost(){
        $db      = \Config\Database::connect();
        $builder = $db->table('post');
        $builder->orderBy("createdat", "asc");
        $builder->limit(6);
        $query = $builder->get();
        return $query->getResultArray();
    }

}