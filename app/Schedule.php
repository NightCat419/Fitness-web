<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $table = 'schedule';    
    public $timestamps = false; 
    
    public static function getWorkout($date) {
        $schedules = Schedule::where('date', $date)->get();
        
        if (!$schedules->isEmpty()) {
            $workout_id = $schedules[0]->workout_id;
            $workouts = Workouts::where('workout_id', $workout_id)->get();
            
            if (!$workouts->isEmpty()) {
                $results = json_decode($workouts[0], true);
                $relations = Relations::where('workout_id', $workout_id)->get();
                $results['short_desc'] = $schedules[0]->description;
                $results['relations'] = json_decode($relations, true);
                
                return $results;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    // return today workout
    public static function getTodayWorkout() {
        $today_date = \Helpers\DateHelper::getLocalUserDate(date('Y-m-d h:i:s'));        
        return Schedule::getWorkout($today_date);
    }
    
    public static function getScheduledWorkouts($weekDays) {
        $results = array();        
        $day = 1;
        foreach($weekDays as $date) {
            $workout = Schedule::getWorkout($date);            
            $workout['day_number'] = $day;
            $workout['date']  = $date;
            
            $results[] = $workout;
            $day++;
        }
        return $results;
    }
    
    public static function isScheduled($startDate, $endDate) {
        $schedules = Schedule::where('date', '>=', $startDate)->where('date', '<=', $endDate)->get();
        if ($schedules->isEmpty()) return false;
        
        return true;
    }
}
