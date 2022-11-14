<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Book_model extends Model
{
    protected $table = 'book';
     
    public function getbook($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savebook($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatebook($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletebook($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}