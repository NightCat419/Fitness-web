<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    private $target_areas, $movements, $today_workout;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->target_areas = DB::table('target_areas')->get();
        $this->movements = DB::table('movements')->get();   
        $this->today_workout = \App\Schedule::getTodayWorkout();
        
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('user/home', ['name' => 'dashboard'])
                    ->with('target_areas', json_decode($this->target_areas, true))
                    ->with('movements', json_decode($this->movements, true))
                    ->with('today_workout', $this->today_workout)
                    ->with('current_date', \Helpers\DateHelper::getLocalUserDate(date('Y-m-d H:i:s')));
    }
    
    public function setCurrentTimeZone(Request $request) { //To set the current timezone offset in session
        $current_time_zone = $request->get('current_zone');
        $request->session()->put('current_time_zone',  $current_time_zone);        
    }
}
