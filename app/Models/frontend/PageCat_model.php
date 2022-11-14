<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class PageCat_model extends Model
{
    
    public function getpagecat(){
        $db      = \Config\Database::connect();
        $builder = $db->table('pagecat');
        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getpagebycat($name, $limit, $offset){
        $db      = \Config\Database::connect();
        $builder = $db->table('page');
        $builder->join('pagecat', 'pagecat.id = page.cat_id');
        $builder->where('pagecat.name', 'Dịch vụ');
        $query = $builder->get();
        return $query->getResultArray();
    }

}