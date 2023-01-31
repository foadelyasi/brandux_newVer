<?php

namespace App\Http\Livewire\Admin\Portfolio;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $title,$description,$made_by,$category_id,$image1,$image2,$image3,$loading;

    protected $listeners=['category_id'=>'selectCategory'];

    public function selectCategory($id){
        $this->category_id=$id;
    }

    protected $rules=[
      'title'=>'required','description'=>'required','category_id'=>'required',
      'made_by'=>'required',
        'image1'=>'required|image|max:1024|mimes:jpg,png,jpeg',
        'image2'=>'required|image|max:1024|mimes:jpg,png,jpeg',
        'image3'=>'required|max:1024|mimes:jpg,png,jpeg',
    ];

    protected $paginationTheme="bootstrap";


    public function edit($id){

        return redirect()->route('editPortfolio',$id);

    }
    public function store(){


        $this->validate();


        $IMGname=date('YmdHi').'_'.'Porfolio'.rand(0,999).'A'.'.'.$this->image1->extension();
        $this->image1->storeAs('upload/portfolio',$IMGname,'public');

        $IMGname2=date('YmdHi').'_'.'Porfolio'.rand(0,999).'B'.'.'.$this->image2->extension();
        $this->image2->storeAs('upload/portfolio',$IMGname2,'public');


            $IMGname3=date('YmdHi').'_'.'Porfolio'.rand(0,999).'C'.'.'.$this->image3->extension();
            $this->image3->storeAs('upload/portfolio',$IMGname3,'public');



        Portfolio::create([
         'title'=>$this->title,
          'category_id'=>$this->category_id,
         'description'=>$this->description,
         'made_by'=>$this->made_by,
         'image1'=>$IMGname,
         'image2'=>$IMGname2,
         'image3'=>$IMGname3,

        ]);
        $this->reset(['title','category_id','description','made_by','image1','image2','image3']);
        session()->flash('add_portfolio','نمونه کار جدید با موفقیت اضافه شد');

    }

    public function delete(Portfolio $portfolio){

        $this->loading=$portfolio->id;

        if (Storage::exists('upload/portfolio/'.$portfolio->image1.'')){
            Storage::delete('upload/portfolio/'.$portfolio->image1.'');
        };

        if (Storage::exists('upload/portfolio/'.$portfolio->image2.'')){
            Storage::delete('upload/portfolio/'.$portfolio->image2.'');
        };

        if (Storage::exists('upload/portfolio/'.$portfolio->image3.'')){
            Storage::delete('upload/portfolio/'.$portfolio->image3.'');
        };

        $portfolio->delete();
        session()->flash('delete_portfolio','نمونه کار مورد نظر با موفقیت حذف شد');

    }

    public function render()
    {
        $portfolios=Portfolio::latest()->paginate(8);
        $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
        return view('livewire.admin.portfolio.index',compact('portfolios','categories'))->extends('layouts.admin')->section('content');
    }
}
