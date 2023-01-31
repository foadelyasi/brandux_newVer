<?php

namespace App\Http\Livewire\Front\Portfolio;

use App\Models\Category;
use App\Models\Portfolio;
use Livewire\Component;

class Index extends Component
{
    public $categoryID=0;

    protected $listeners=[
      'ChangeCategoryID'
    ];

    public function ChangeCategoryID($id){
        $this->categoryID=$id;
    }

    public function detail($id){
        return redirect()->route('detailPortfolio',$id);
    }

    public function render()
    {
        if ($this->categoryID==0){
            $portfolios=Portfolio::latest()->paginate(6);
        }else{
            $portfolios=Portfolio::where('category_id',$this->categoryID)->latest()->paginate(6);
        }

        $categories=Category::where('parent_id',null)->get();

        return view('livewire.front.portfolio.index',compact('portfolios','categories'))->extends('layouts.Default')->section('content');
    }
}
