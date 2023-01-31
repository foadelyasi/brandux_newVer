<?php

namespace App\Http\Livewire\Front\Home;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public function SingleProduct($slug){
      return redirect()->route('SingleProduct',$slug);
    }
    public function render()
    {
        $designProducts=Product::all()->where('category_id',2)->take(4);
        return view('livewire.front.home.index',compact('designProducts'))->extends('layouts.Default')->section('content');
    }
}
