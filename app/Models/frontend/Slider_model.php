<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Slider_model extends Model
{
    
    public function getSlider(){
        $db      = \Config\Database::connect();
        $builder = $db->table('slider');
        $query = $builder->get();
        return $query->getResultArray();
    }
}