<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Auth;

class WorkoutController extends Controller
{
    private $target_areas, $movements;
    
    public function __construct() {
        $this->target_areas = DB::table('target_areas')->get();
        $this->movements = DB::table('movements')->get();       
        
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workout_id = $request->segment(2);
        
        $workout = DB::table('workouts')->where('workout_id', '=', $workout_id)->get();
        $relations = DB::table('relations')->where('workout_id', '=', $workout_id)->get();
        $optional_requirements = DB::table('optional_requirements')->where('workout_id', '=', $workout_id)->get();
                
        $favourites = DB::table('favourites')->where('workout_id', $workout_id)->where('user_id', Auth::id())->get();
        $favourited = !$favourites->isEmpty();
        
        if (!$workout->isEmpty()) {
            return view('workout')
                    ->with('favourited', $favourited)
                    ->with('workout', json_decode($workout, true))
                    ->with('relations', json_decode($relations, true))
                    ->with('optional_requirements', json_decode($optional_requirements, true))
                    ->with('target_areas', json_decode($this->target_areas, true))
                    ->with('movements', json_decode($this->movements, true));
        } else {
        }        
    }

    public function addToFavourites(Request $request) {
        if (Auth::guest()) {
            return response()->json(['status' => 'failed']);
        } else {
            $workout_id = $request->get('workout_id');     
            
            $user_id = Auth::id();
            \App\Favourites::updateOrCreate(['user_id' => $user_id, 'workout_id' => $workout_id]);
            
            return response()->json(['status' => 'success']);
        }
    }
    
    public function removeFromFavourites(Request $request) {
        if (Auth::guest()) {
            return response()->json(['status' => 'failed']);
        } else {
            $workout_id = $request->get('workout_id');     
            
            $user_id = Auth::id();
            \App\Favourites::where('user_id', $user_id)->where('workout_id', $workout_id)->delete();
            
            return response()->json(['status' => 'success']);
        }
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
