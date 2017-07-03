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
    
    public static function getScheduleDays($currentDate) {
        $year = date('Y', strtotime($currentDate));
        $weekNumber = DateHelper::getIsoWeeksInYear($year);
        
        $results = array();        
        for ($week = 1; $week <= $weekNumber; $week++) {
            $startDate = DateHelper::getStartDateByWeek(sprintf("%02d", $week), $year);
            $endDate = DateHelper::getEndDateByWeek(sprintf("%02d", $week), $year);
            
            if ($week == 1) {
                if ($startDate > "$year-01-01") {
                    $day = date("d", strtotime($startDate));
                    $day--;
                    $day = sprintf("%02d", $day);
                   
                    if (\App\Schedule::isScheduled("$year-01-01", "$year-01-$day")) {
                        $results[] = array('start' => "$year-01-01", 'end' => "$year-01-$day");
                    }
                } else if ($startDate < "$year-01-01") {
                    $startDate = "$year-01-01";
                }
            }
            
            if ($startDate <= $currentDate) {
                if (\App\Schedule::isScheduled($startDate, $endDate)) {
                    $results[] = array('start' => $startDate, 'end' => $endDate);   
                }

                if ($week == $weekNumber) {
                    if ($endDate < "$year-12-31") {
                        $day = date("d", strtotime($endDate));
                        $day++;
                        $day = sprintf("%02d", $day);
                        
                        if (\App\Schedule::isScheduled("$year-12-$day", "$year-12-31")) {
                            $results[] = array('start' => "$year-12-$day", 'end' => "$year-12-31");
                        }
                    } else if ($endDate > "$year-12-31") {
                        $endDate = "$year-12-31";
                    }
                }
            }
        }
        return $results;
    }
    
    public static function getIsoWeeksInYear($year) {
        $date = new \DateTime;
        $date->setISODate($year, 53);
        return ($date->format("W") === "53" ? 53 : 52);
    }
    
    public static function getEndDateByWeek($week, $year) {
        $date = date( "Y-m-d", strtotime($year."W".$week."7") ); // Last day of week
        return $date;
    }
    
    public static function getStartDateByWeek($week, $year) {
        $date = date( "Y-m-d", strtotime($year."W".$week."1") ); // First day of week
        return $date;
    }
}
