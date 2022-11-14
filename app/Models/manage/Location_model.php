<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Location_model extends Model
{
    protected $table = 'location';
     
    public function getlocation($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savelocation($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatelocation($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletelocation($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}