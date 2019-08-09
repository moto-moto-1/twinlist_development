<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //





    public function users(){

        return $this->belongsToMany('App\User','taskownerships','task_id','user_id');
        
        
        }
        
        public function items(){
                return $this->hasMany('App\Item','itemownership','task_id','item_id');
            }
        
            public function teams(){
            return $this->belongsTo('App\Team', 'team_id');
        }
        

    
}
