<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyDashboardController extends Controller
{
    public function dashboard(){
        $today=jdate('today')->format('%A, %d %B %y');
        $userID=Auth()->id();
        $lastOrders=Order::where('user_id',$userID)->take(3);
        $OrderCount=Order::where('user_id',$userID)->count();

        return view('Admin.home',compact('today','lastOrders','OrderCount'));
    }
}
