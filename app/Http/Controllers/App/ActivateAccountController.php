<?php

namespace App\Http\Controllers\App;

use Auth;
use URL;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivateAccountController extends Controller
{
    public function __construct()
    {
        $this->target_areas = DB::table('target_areas')->get();
        $this->movements = DB::table('movements')->get();
        $this->today_workout = \App\Schedule::getTodayWorkout();

        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $subscription = $user->subscription;
        //echo $user;
        if($subscription == null){
            $prevUrl = Url::previous();
            $requestedRoute = app('router')->getRoutes()->match(app('request')->create($prevUrl))->getName();
            if ($requestedRoute == "login"){
                //echo phpinfo();
                return view('user/activateaccount')
                    ->with('target_areas', json_decode($this->target_areas, true))
                    ->with('movements', json_decode($this->movements, true));
//                return redirect('http://fitness.localhost.com/pricing');
            }
            else if($requestedRoute == "register"){
                echo $requestedRoute;
            }
            else{
                echo $requestedRoute;
            }
        }
        else{
            echo $subscription;
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
