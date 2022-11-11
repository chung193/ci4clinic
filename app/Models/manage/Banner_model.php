<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Banner_model extends Model
{
    protected $table = 'shop_banner';
     
    public function getbanner($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savebanner($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatebanner($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletebanner($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}