<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   
    //


    public function users(){

        return $this->belongsToMany('App\User','itemownerships','item_id','user_id');
        
        
        }
        
           public function teams(){
            return $this->belongsTo('App\Team', 'team_id');
        }
        
        
         public function tasks(){
            return $this->belongsTo('App\Task', 'owner');
        }
        
}
