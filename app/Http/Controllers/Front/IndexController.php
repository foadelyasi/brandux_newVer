<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $designProducts=Product::all()->where('category_id',1)->take(4);
        return view('welcome',compact('designProducts'));
    }
}
