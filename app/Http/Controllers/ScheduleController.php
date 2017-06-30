<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;
use App\Helpers;

class ScheduleController extends Controller {

    private $target_areas, $movements;

    public function __construct() {
        $this->target_areas = DB::table('target_areas')->get();
        $this->movements = DB::table('movements')->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $currentDate = \Helpers\DateHelper::getLocalUserDate(date('Y-m-d H:i:s'));
        $day = \Helpers\DateHelper::getDay($currentDate);
        $weekDays = \Helpers\DateHelper::getWeekDays($currentDate, $day);        
        $workouts = \App\Schedule::getScheduledWorkouts($weekDays);
        
        return view('schedule', ['number_of_day' => $day, 'current_date' => $currentDate, 'weekDays' => $weekDays])
                        ->with('target_areas', json_decode($this->target_areas, true))
                        ->with('movements', json_decode($this->movements, true))
                        ->with('workouts', $workouts);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
