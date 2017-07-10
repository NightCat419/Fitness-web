<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Auth;

class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->target_areas = DB::table('target_areas')->get();
        $this->movements = DB::table('movements')->get();   
        
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favourites = \App\Favourites::join('workouts', 'workouts.workout_id', '=', 'favourites.workout_id')
                ->select('workouts.*', 'favourites.*')->where('favourites.user_id', Auth::id())->paginate(12);        
        $total_count = $favourites->total();        
        $decoded_workouts = array();
        
        foreach($favourites as $favourite) {
            $decoded_workout = json_decode($favourite, true);            
            $workout_id = $decoded_workout['workout_id'];
            $decoded_workout['relations'] = \App\Relations::getRelatedWorkouts($workout_id);  
            
            $decoded_workouts[] = $decoded_workout;
        }
        
        return view('user/favourites')
                ->with('total_count', $total_count)
                ->with('workouts', $decoded_workouts)
                ->with('target_areas', json_decode($this->target_areas, true))
                ->with('movements', json_decode($this->movements, true))
                ->with('links', $favourites->links('vendor.pagination.custom'));
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
