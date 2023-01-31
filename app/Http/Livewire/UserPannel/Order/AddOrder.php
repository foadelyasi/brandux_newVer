<?php

namespace App\Http\Livewire\UserPannel\Order;

use App\Models\Product;
use Livewire\Component;

class AddOrder extends Component
{
    public function render()
    {
        $products=Product::with('attr')->get();
        return view('livewire.user-pannel.order.add-order',compact('products'))->extends('layouts.admin')->section('content');
    }
}
