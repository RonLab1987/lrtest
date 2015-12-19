<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //protected $table = 'tests';
    protected $table = 'client';
    protected $guarded = array('cl_id');
    
  public $timestamps = false;
    
    public function createUser( $request) {
        $this->cl_name = $request['client_name'];
        $this->save();
        
    }


    public function getClient(){
        $res = $this->select('cl_name','cl_phone1','cl_id')
               ->goodClient()
               ->orderBy('cl_id','ASC')
               ->get();
        return $res;
    }
    
    public function getTopClient(){
        $res = $this->select('cl_name','cl_phone1','cl_id')
               ->topClient()
               ->orderBy('cl_id','ASC')
               ->get();
        return $res;
    }
    
    //scope area
    
    public function scopeGoodClient($query){
        $query->where('cl_id','>',5);
    }
    
    public function scopeTopClient($query){
        $query->where('cl_id','<=',5);
    }
}

