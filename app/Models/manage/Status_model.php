<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class Status_model extends Model
{
    protected $table = 'api_status';
     
    public function getstatus($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savestatus($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatestatus($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletestatus($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function countstatus($slug){
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }
 
}