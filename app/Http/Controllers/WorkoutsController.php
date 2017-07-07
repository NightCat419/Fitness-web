<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use DB;
use Datatables;

class WorkoutsController extends Controller
{
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
    public function index()
    {
        $workouts = \App\Workouts::paginate(12);
        $total_count = $workouts->total();
        
        $decoded_workouts = array();
        foreach($workouts as $workout) {
            $decoded_workout = json_decode($workout, true);
            $workout_id = $decoded_workout['workout_id'];
            $decoded_workout['relations'] = \App\Relations::getRelatedWorkouts($workout_id);  
            
            $decoded_workouts[] = $decoded_workout;
        }        
        
        return view('user/workouts')
                ->with('total_count', $total_count)
                ->with('workouts', $decoded_workouts)
                ->with('target_areas', json_decode($this->target_areas, true))
                ->with('movements', json_decode($this->movements, true))
                ->with('links', $workouts->links('vendor.pagination.custom'));
    }

    public function search(Request $request) {
        if ($request->has("area")) {
            $area = $request->get("area");
            $workouts = \App\Workouts::where('area', $area)->paginate(12);
        } else if ($request->has("movement")) {
            $movement = $request->get("movement");
            $workouts = \App\Workouts::where('movement', $movement)->paginate(12);
        } else if ($request->has("min_duration")) {
            $min_duration = $request->get("min_duration");
            if ($request->has("max_duration")) {
                $max_duration = $request->get("max_duration");
                $workouts = \App\Workouts::where('minutes', '>=', $min_duration)->where('minutes', '<=', $max_duration)->paginate(12);
            } else {
                $workouts = \App\Workouts::where('minutes', '>=', $min_duration)->paginate(12);
            }            
        } else {
            $workouts = \App\Workouts::paginate(12);
        }
        
        $total_count = $workouts->total();        
        $decoded_workouts = array();
        foreach($workouts as $workout) {
            $decoded_workout = json_decode($workout, true);
            $workout_id = $decoded_workout['workout_id'];
            $decoded_workout['relations'] = \App\Relations::getRelatedWorkouts($workout_id);  
            
            $decoded_workouts[] = $decoded_workout;
        }        
        
        return view('user/workouts')
                ->with('total_count', $total_count)
                ->with('workouts', $decoded_workouts)
                ->with('target_areas', json_decode($this->target_areas, true))
                ->with('movements', json_decode($this->movements, true))
                ->with('links', $workouts->appends(Input::except('page'))->links('vendor.pagination.custom'));
    }
    
    public function admin_ajax_data() {
        return Datatables::of(\App\Workouts::query())->make(true);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
