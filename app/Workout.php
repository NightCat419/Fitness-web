<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    //
    protected $table = 'workouts';   
    
    public function relations() {
        return $this->hasMany('App\Relations', 'workout_id', 'workout_id');
    }
}
