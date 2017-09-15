<?php

namespace App\Http\Controllers\App;

use Auth;

use DateTime;
use DateTimeZone;
use Illuminate\Database\Eloquent\Model;
use URL;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Stripe\Charge;
use \Stripe\Stripe;
use Session;
use Redirect;
use Input;
use App\Helpers;
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
        if ($subscription == null) {
            $prevUrl = Url::previous();
            $requestedRoute = app('router')->getRoutes()->match(app('request')->create($prevUrl))->getName();
            if ($requestedRoute == "login") {
                //echo phpinfo();
                return view('user/activateaccount')
                    ->with('target_areas', json_decode($this->target_areas, true))
                    ->with('movements', json_decode($this->movements, true));
//                return redirect('http://fitness.localhost.com/pricing');
            } else if ($requestedRoute == "register") {
                return redirect('pricing');
                //echo $requestedRoute;
            } else {
                return view('user/activateaccount')
                    ->with('target_areas', json_decode($this->target_areas, true))
                    ->with('movements', json_decode($this->movements, true));
            }
        } else {
            //return redirect('');
            return view('user/activateaccount')
                ->with('target_areas', json_decode($this->target_areas, true))
                ->with('movements', json_decode($this->movements, true));
        }
    }

    public function stripePay(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $input = $request->only(['input-pay-amount', 'pay-type', 'plan-type']);
            Charge::create(array(
                "amount" => floatval($input['input-pay-amount']) * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test payment."
            ));

            $pay_type = $input['pay-type'];
            $plan_type = $input['plan-type'];
            $user_id = Auth::user()->id;
            $created_date = $this->getDatetimeNow();
            //$created_date = \Helpers\DateHelper::getLocalUserDate(date('Y-m-d H:i:s'));

            if ($pay_type == "monthly") {
                $expire_date = date('Y-m-d H:i:s', strtotime("+1 months", strtotime($created_date)));
            } else {
                $expire_date = date('Y-m-d H:i:s', strtotime("+12 months", strtotime($created_date)));
            }
            $data = array('payment_type'=>$pay_type, 'plan_type'=>$plan_type, 'user_id'=>intval($user_id), 'created_date'=>$created_date, 'expire_date'=>$expire_date);

            DB::table('subscriptions')->insert($data);

            Session::flash('success-message', 'Payment done successfully!');
            //return redirect('');
            return \Redirect::back();
        } catch (\Exception $e) {
            Session::flash('fail-message', "Error! Please confirm whether you selected Payment Plan and Try again.");
            return \Redirect::back();
        }
    }

    public function getDatetimeNow() {
        $tz_object = new DateTimeZone('Australia/Sydney');
        //date_default_timezone_set('Brazil/East');

        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y-m-d h:i:s');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
