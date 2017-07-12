<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\TargetArea;
use App\Movement;
use DB;

class ApiController extends Controller
{
    public function target_areas(Request $request) {
        $q = $request->get('q');
        return TargetArea::where('area', 'like', "%$q%")->paginate(null, [DB::raw('area as text'),DB::raw('area as text')]);
    }
    
    public function movements(Request $request) {
        $q = $request->get('q');
        return Movement::where('movement', 'like', "%$q%")->paginate(null, ['id',DB::raw('movement as text')]);
    }
}
