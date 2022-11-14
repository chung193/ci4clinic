<?php namespace App\Models\manage;
use CodeIgniter\Model;
 
class PageCat_model extends Model
{
    protected $table = 'pagecat';
     
    public function getpagecat($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function defaultcat(){
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->set('is_default', 0);
        $builder->update();
    }

    public function savepagecat($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatepagecat($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deletepagecat($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }

    public function countWhere($slug){
        $query = $this->where(['slug' => $slug])->countAllResults();
        return $query;
    }
 
}