<?php

namespace App\Http\Livewire\Front\Article;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $articles=Article::latest()->paginate(5);
        $categories=Category::where('parent_id',24)->get();
        return view('livewire.front.article.index',compact('articles','categories'))->extends('layouts.Default')->section('content');
    }
}
