<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Staff_model extends Model
{
    protected $table = 'api_staff';
     
    public function getstaff($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savestaff($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatestaff($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletestaff($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function countstaff($slug){
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }
 
}