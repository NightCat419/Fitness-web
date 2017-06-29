<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $table = 'schedule';    
    public $timestamps = false; 
    
    // return today workout
    public static function getTodayWorkout() {
        $today_date = \Helpers\DateHelper::getLocalUserDate(date('Y-m-d h:i:s'));        
        $schedules = Schedule::where('date', $today_date)->get();
        
        if (!$schedules->isEmpty()) {
            $workout_id = $schedules[0]->workout_id;
            $workouts = Workouts::where('workout_id', $workout_id)->get();
            
            if (!$workouts->isEmpty()) {
                $results = json_decode($workouts[0], true);
                $relations = Relations::where('workout_id', $workout_id)->get();
                $results['relations'] = json_decode($relations, true);
                
                return $results;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
}
