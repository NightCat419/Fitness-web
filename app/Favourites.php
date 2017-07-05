<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    //
    protected $table = 'favourites';    
    public $timestamps = false;     
    
    protected $fillable = ['user_id', 'workout_id'];
    
    public static function getMyFavourites() {
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
}
