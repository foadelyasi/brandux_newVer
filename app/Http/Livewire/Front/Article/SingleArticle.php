<?php

namespace App\Http\Livewire\Front\Article;

use App\Models\Article;
use App\Models\Comment;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

class SingleArticle extends Component
{
    public $history,$description,$image,$meta_keywords,$title,$comment,$username,$replybox,$comment_id_for_reply,$article_id;

    public function mount($slug){
        $article=Article::where('slug',$slug)->first();
        $this->title=$article->title;
        $this->description=$article->description;
//        $this->meta_keywords=unserialize($article->meta_keywords);
        $this->image=$article->image;
        $this->history = Jalalian::forge($article->created_at)->format('%A, %d %B %y');
        $this->article_id=$article->id;
    }

    public function openReply($CMID){

        $this->comment_id_for_reply=$CMID;

    }

    public function saveComment(){

      $article_id=$this->article_id;

        Comment::query()->create([
            'article_id'=>$article_id,
            'product_id'=>null,
            'parent_id'=>null,
            'username'=>$this->username,
            'type'=>'article',
            'comment'=>$this->comment,
            'status'=>0,
            'star'=>null,
        ]);

        $this->reset(['username','comment','comment_id_for_reply']);

        session()->flash('add_comment','نظر شما با موفقیت ثبت شد و در انتظار تایید مدیر می باشد');

    }

    public function saveReply($id){

        Comment::query()->create([
            'article_id'=>$this->article_id,
            'product_id'=>null,
            'parent_id'=>$id,
            'username'=>$this->username,
            'type'=>'article',
            'comment'=>$this->comment,
            'status'=>0,
            'star'=>null,
        ]);

        $this->reset(['username','comment','comment_id_for_reply']);

        session()->flash('add_comment','نظر شما با موفقیت ثبت شد و در انتظار تایید مدیر می باشد');

    }

    public function render()
    {
        $comments=Comment::where('article_id',$this->article_id)->where('parent_id',null)->latest()->get();
        return view('livewire.front.article.single-article',compact('comments'))->extends('layouts.Default')->section('content');
    }
}
