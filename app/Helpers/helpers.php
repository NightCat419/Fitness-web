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
    
    public static function convertReadableFormat($dateString) {
        //return $dateString;
        return date("l j M", strtotime($dateString));
    }
}
