<?php

namespace App\Http\Livewire\Admin\Attr;

use App\Models\Attr;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public $title,$attrEdit,$attr,$loading;

    protected $paginationTheme="bootstrap";
    protected $listeners=['ShowEditFormAttr','refreshComponent'=>'$refresh'];
    protected $rules=[
      'title'=>'required',
    ];

    public function ShowEditFormAttr($status,$ID){

        if ($status=='cancel'){
            $this->attrEdit=0;
        }else{
            $this->cat=Attr::findOrFail($ID);
            $this->attrEdit=1;

        }

    }

    public function store(){

        $this->validate();

        Attr::create([
           'title'=>$this->title,
        ]);
        $this->reset(['title']);

        session()->flash('add_attr','ویژگی جدید با موفقیت اضافه شد');
    }

    public function update(Attr $attr){
        if ($this->title==null){
            $this->title=$attr->title;
        }
        $attr->title=$this->title;
        $attr->save();
        $this->reset(['title']);
        $this->attrEdit=0;
        session()->flash('update_attr','ویژگی با موفقیت بروزرسانی  شد');
    }
    public function delete($id){
        $this->loading=$id;
        $attr=Attr::findOrFail($id);
        $pivotTable=DB::table('attr_product')->where('attr_id',$id);
        if ($pivotTable!=null){
            $pivotTable->delete();
        }
        $attr->delete();
        session()->flash('delete_attr','ویژگی با موفقیت حذف شد');
    }

    public function render()
    {
        $attrs=Attr::latest()->paginate(8);
        return view('livewire.admin.attr.index',compact('attrs'))->extends('layouts.admin')->section('content');
    }
}
