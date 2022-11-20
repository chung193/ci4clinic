<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Page_model extends Model
{
    
    public function getPage(){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getPageSlug($slug){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $builder->where('page.slug', $slug);
        $query = $builder->get();
        return $query->getRow();
    }

    public function getPageByCat($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $builder->join('pagecat', 'pagecat.id = page.cat_id');
        $builder->where('pagecat.id', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }

}