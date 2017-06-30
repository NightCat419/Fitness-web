<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Helpers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;

class DateHelper {
    public static function getLocalUserDate($attr) {
        if (Session::has('current_time_zone')) {
            $current_time_zone = Session::get('current_time_zone');
            $utc = strtotime($attr) - date('Z'); // Convert the time zone to GMT 0. If the server time is what ever no problem.

            $attr = $utc + $current_time_zone; // Convert the time to local time
            $attr = date("Y-m-d", $attr);
            
            return $attr;
        } else {
            return date("Y-m-d");
        }
    }
    
    public static function convertReadableFormat($dateString, $day = true, $year = false) {
        //return $dateString;
        if ($year == false) {
            if ($day == true) {
                return date("l, F j", strtotime($dateString));
            } else {
                return date("F j", strtotime($dateString));
            }
        } else {
            if ($day == true) {
                return date("l, F j, Y", strtotime($dateString));
            } else {
                return date("F j, Y", strtotime($dateString));
            }
        }
    }
    
    public static function getDay($currentDate) {
        $weekDay = date('N', strtotime($currentDate));
        return $weekDay;
    }
    
    public static function getWeekDays($currentDate, $day) {
        $daysToMon = $day - 1;
        $daysToSun = 7 - $day + 1;
        
        $results = array();
        for ($d = $daysToMon; $d > 0; $d--) {
            $results[] = date("Y-m-d", strtotime($currentDate . ' - ' . $d . ' days'));
        }
        
        for ($d = 0; $d < $daysToSun; $d++) {
            $results[] = date("Y-m-d", strtotime($currentDate . ' + ' . $d . ' days'));
        }
        return $results;
    }
}
