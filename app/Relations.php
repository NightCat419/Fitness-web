<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relations extends Model
{
    //
    protected $table = 'relations';    
    public $timestamps = false; 
    
    public static function getRelatedWorkouts($workout_id) {
        $relations = Relations::where('workout_id', $workout_id)->get();
        $relations = json_decode($relations, true);

        return $relations;
    }
}
