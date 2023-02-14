<?php

namespace App\Http\Livewire\Front\AboutUs;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.front.about-us.index')->extends('layouts.Default')->section('content');
    }
}
