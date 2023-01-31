<?php

namespace App\Http\Livewire\Admin\Portfolio;

use App\Models\Category;
use App\Models\Portfolio;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $portfolio,$title,$description,$made_by,$category_id,$image1,$image2,$image3;

    protected $rules=[
        'title'=>'required','description'=>'required','category_id'=>'required',
        'made_by'=>'required',

    ];
    public function mount($id){

        $this->portfolio=Portfolio::findOrFail($id);
        $this->title=$this->portfolio->title;
        $this->description=$this->portfolio->description;
        $this->made_by=$this->portfolio->made_by;
        $this->category_id=$this->portfolio->category_id;
        $this->image1=$this->portfolio->image1;
        $this->image2=$this->portfolio->image2;
        $this->image3=$this->portfolio->image3;

    }

    public function update(Portfolio $portfolio){

        $this->validate();

        if ($this->image1==null){
            $this->image1=$portfolio->image1;
        }else{
            $this->validate([
                'image1'=>'image|max:1024|mimes:jpg,png,jpeg',
            ]);
            $img1=date('YmdHi').'_'.'Porfolio'.rand(0,999).'A'.'.'.$this->image1->extension();
            $this->image1->storeAs('upload/portfolio',$img1,'public');
        }

        if ($this->image2==null){
            $this->image2=$portfolio->image2;
        }else{
            $this->validate([
                'image2'=>'image|max:1024|mimes:jpg,png,jpeg',
            ]);
            $img2=date('YmdHi').'_'.'Porfolio'.rand(0,999).'A'.'.'.$this->image2->extension();
            $this->image2->storeAs('upload/portfolio',$img2,'public');
        }

        if ($this->image3==null){
            $this->image3=$portfolio->image3;
        }else{
            $this->validate([
                'image3'=>'image|max:1024|mimes:jpg,png,jpeg',
            ]);
            $img3=date('YmdHi').'_'.'Porfolio'.rand(0,999).'A'.'.'.$this->image3->extension();
            $this->image3->storeAs('upload/portfolio',$img3,'public');
        }

        $portfolio->title=$this->title;
        $portfolio->description=$this->description;
        $portfolio->category_id=$this->category_id;
        $portfolio->made_by=$this->made_by;
        $portfolio->image1=$this->image1;
        $portfolio->image2=$this->image2;
        $portfolio->image3=$this->image3;
        $portfolio->save();

        session()->flash('update_portfolio','نمونه کار مورد نظر با موفقیت بروز رسانی شد');
        $this->reset(['title','description','made_by','category_id','image1','image2','image3']);

       return redirect()->route('Portfolio');



    }
    public function render()
    {
        $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
        return view('livewire.admin.portfolio.edit',compact('categories'))->extends('layouts.admin')->section('content');
    }
}
