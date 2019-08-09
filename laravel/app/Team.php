<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    public function users(){

        return $this->belongsToMany('App\User','memberships','team_id','user_id');
        
        
        }
        
        
        public function tasks()
            {
                return $this->hasMany('App\Task','team_id');
            }
        
        
            public function items()
            {
                return $this->hasMany('App\Item','team_id');
            }
        
}
