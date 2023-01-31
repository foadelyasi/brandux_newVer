<?php

namespace App\Http\Livewire\Front\Buying;

use Livewire\Component;

class Callback extends Component
{
    public function render()
    {
        return view('livewire.front.buying.callback')->extends('layouts.Default')->section('content');
    }
}
