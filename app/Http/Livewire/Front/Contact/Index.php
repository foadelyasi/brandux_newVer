<?php

namespace App\Http\Livewire\Front\Contact;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.front.contact.index')->extends('layouts.admin')->section('content');
    }
}
