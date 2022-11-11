<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Shop_Slider_model extends Model
{
    protected $table = 'shop_slider';
    
     
    public function getSlider($id = false)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        
        if($id === false){
            $builder->orderBy('id', 'DESC');
            $query = $builder->get();
            return $query->getResultArray();
        }else{
            $builder->where('shop_slider.id', $id);
            $query = $builder->get();
            return $query;
        }   
    }

    
 
    public function saveSlider($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateSlider($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }


    public function deleteSlider($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}