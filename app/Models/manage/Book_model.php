<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Book_model extends Model
{
    protected $table = 'book';
     
    public function getbook($id = false)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        if($id === false){
            $builder->select('book.*, location.address ');
            $builder->join('location', 'location.id = book.location');
            $query = $builder->get();
            return $query->getResultArray();
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