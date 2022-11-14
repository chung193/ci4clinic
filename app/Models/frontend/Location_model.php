<?php namespace App\Models\frontend;
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
}