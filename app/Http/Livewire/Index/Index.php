<?php

namespace App\Http\Livewire\Index;

use App\Models\Food;
use Livewire\Component;

class Index extends Component
{
    public $menu='main';

    protected $listeners=['menuTab'=>'MenuTabChanger'];

    public function MenuTabChanger($tabName){

        $this->menu=$tabName;

    }

    public function render()
    {
        $BestSells=food::where('order_count','>',0)->where('status',1)->take(6)->get();
        return view('livewire.index.index',compact('BestSells'))->extends('layouts.Default')->section('content');
    }
}
