<?php

namespace App\Http\Livewire\Front\Rules;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.front.rules.index')->extends('layouts.Default')->section('content');
    }
}
