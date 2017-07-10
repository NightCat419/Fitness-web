<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relations extends Model
{
    //
    protected $table = 'relations';    
    public $timestamps = false; 
    
    public static function getRelatedWorkouts($workout_id) {
        $relations = json_decode(Relations::where('workout_id', $workout_id)->get(), true);
        return $relations;
    }
    
    public function workouts() {
        return $this->belongsTo('App\Workouts', 'workout_id', 'workout_id');
    }
}
