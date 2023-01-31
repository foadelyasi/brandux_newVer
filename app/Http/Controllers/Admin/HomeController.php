<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function home(){

       $userCount=User::all()->count();

       $today=jdate('today')->format('%A, %d %B %y');

       $lastOrders=Order::all()->take(3);
       $verta=verta();
       $perVerta=verta('-1 month');

       $lastMounthOrder=Order::where('payment_status',1)->whereMonth('history', $verta->month)
           ->whereYear('history', $verta->year)
           ->get();

       $perMonthOrder=Order::where('payment_status',1)->whereMonth('history', $perVerta->month)
           ->whereYear('history', $perVerta->year)
           ->get();



       $monthlyProfit=$lastMounthOrder->sum('amount');

       $perMonthProfit=$perMonthOrder->sum('amount');

       $avrageProfit2CurruntMonth=$monthlyProfit-$perMonthProfit;




       return view('Admin.home',compact('today','lastOrders','monthlyProfit','perMonthProfit','avrageProfit2CurruntMonth','userCount'));
   }
}
