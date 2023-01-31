<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;
    public $title,$category_id,$description,$meta_description,$meta_keywords,$image,$slug,$CKphoto;
    protected $rules=[
        'title'=>'required',
        'category_id'=>'required','description'=>'required',
        'meta_description'=>'required',
        'image'=>'required|image|max:1024|mimes:jpg,png,jpeg',
    ];
    public function store(){
        $this->validate();
        $keywords=serialize(explode(",",$this->meta_keywords));
        if ($this->slug==null){
         $slug=make_slug($this->title);
        }else{
         $slug=make_slug($this->slug);
        }
        $rand=rand('0','480');
        $IMGname=date('YmdHi').'_'.'article'.$rand.'.'.$this->image->extension();
        $this->image->storeAs('upload/articles',$IMGname,'public');

        Article::query()->create([
           'title'=>$this->title,
           'category_id'=>$this->category_id,
           'description'=>$this->description,
           'meta_description'=>$this->meta_description,
            'slug'=>$slug,
            'meta_keywords'=>$keywords,
            'image'=>$IMGname,
        ]);

        $this->reset(['title','category_id','description','meta_description','meta_keywords','image','slug']);
        session()->flash('add_article','مطلب مورد نظر با موفقیت اضافه شد');
    }

   public function upload(){
       $IMGname=date('YmdHi').'_'.'articles'.$this->CKphoto->extension();
       $this->CKphoto->storeAs('upload/articles',$IMGname,'public');

   }
    public function render()
    {
        $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
        return view('livewire.admin.articles.create',compact('categories'))->extends('layouts.admin')->section('content');
    }
}
