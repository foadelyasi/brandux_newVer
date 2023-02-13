<?php

namespace App\Http\Livewire\Front\Question;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.front.question.index')->extends('layouts.Default')->section('content');
    }
}
