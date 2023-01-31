<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $title,$en_title,$parent,$catEdit,$catID=1,$cat,$loading;

    protected $listeners=['ShowEditForm','editCat','refreshComponent'=>'$refresh'];
    protected $rules = [
        'title' => 'required',
        'en_title' => 'required',
    ];
    public function ShowEditForm($status,$ID){

        if ($status=='cancel'){
            $this->catEdit=0;
        }else{
            $this->cat=Category::findOrFail($ID);
            $this->catEdit=1;

        }

    }

    public function editCat($id){
        $this->cat=$id;
        $this->catEdit=1;
    }

    protected $paginationTheme="bootstrap";

    public function store(){

        $this->validate();


        Category::create([
            'title'=>$this->title,
            'en_title'=>$this->en_title,
            'parent_id'=>$this->parent,

        ]);


        $this->reset(['title','en_title','parent']);
        session()->flash('add_category','دسته بندی با موفقیت اضافه شد');

    }

    public function update($id){

        $this->loading=$id;
        $category=Category::findOrFail($id);
        if ($this->title==null){
            $this->title=$category->title;
        }
        if ($this->en_title==null){
            $this->en_title=$category->en_title;
        }
        $category->title=$this->title;
        $category->en_title=$this->en_title;
        $category->save();
        $this->catEdit=0;
        $this->reset(['title','en_title','parent','loading','cat']);
        session()->flash('update_category','دسته بندی با موفقیت بروزرسانی شد');

    }

    public function delete($id){
        $this->loading=$id;
        $category=Category::findOrFail($id);
        $category->delete();
        session()->flash('delete_category','دسته بندی با موفقیت حذف شد');
    }

    public function render()
    {
        $categories=Category::with('childrenRecursive')->where('parent_id',null)->latest()->paginate(8);
        $categoriesCreate=Category::with('childrenRecursive')->where('parent_id',null)->get();
        return view('livewire.admin.category.index',compact('categories','categoriesCreate'))->extends('layouts.admin')->section('content');
    }
}
