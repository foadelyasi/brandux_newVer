<?php

namespace App\Http\Livewire\Front\Portfolio;

use App\Models\Portfolio;
use Livewire\Component;

class Single extends Component
{
    public $portfolio,$title,$description,$made_by,$image1,$image2,$image3;
    public function mount($id){
        $this->portfolio=Portfolio::findOrFail($id);
        $this->title=$this->portfolio->title;
        $this->description=$this->portfolio->description;
        $this->made_by=$this->portfolio->made_by;
        $this->image1=$this->portfolio->image1;
        $this->image2=$this->portfolio->image2;
        $this->image3=$this->portfolio->image3;
    }

    public function render()
    {
        return view('livewire.front.portfolio.single')->extends('layouts.Default')->section('content');
    }
}
