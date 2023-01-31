<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $loading;

    protected $paginationTheme="bootstrap";
    public function edit($id){
        return redirect()->route('editArticle',$id);
    }

    public function delete(Article $article){
        $this->loading=$article->id;
        $article->delete();
        session()->flash('delete_article','مطلب مورد نظر حذف شد');
    }


    public function render()
    {
        $articles=Article::latest()->paginate(10);
        return view('livewire.admin.articles.index',compact('articles'))->extends('layouts.admin')->section('content');
    }
}
