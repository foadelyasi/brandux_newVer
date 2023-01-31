<?php

namespace App\Http\Livewire\Front\Product;

use Livewire\Component;

class ListProduct extends Component
{
    public function render()
    {
        return view('livewire.front.product.list-product')->extends('layouts.Default')->section('content');
    }
}
