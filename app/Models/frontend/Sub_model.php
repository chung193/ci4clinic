<?php namespace App\Models\frontend;
use CodeIgniter\Model;
 
class Sub_model extends Model
{
    protected $table = 'sub';
     
    public function getsub($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function savesub($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatesub($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletesub($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
 
}