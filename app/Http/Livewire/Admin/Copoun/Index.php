<?php

namespace App\Http\Livewire\Admin\Copoun;

use App\Models\Copoun;
use Livewire\Component;

class Index extends Component
{
    public $code,$discount,$loading;

    protected $paginationTheme="bootstrap";
    protected $rules=[

        'code'=>'required',
        'discount'=>'required|numeric|min:1|max:30'
    ];

    public function store(){
        $this->validate();

        Copoun::create([
            'code'=>$this->code,
            'discount'=>$this->discount
        ]);

        $this->reset(['code','discount']);
        session()->flash('add_copoun','کوپون با موفقیت اضافه شد ');
    }
    public function delete($id){
        $this->loading=$id;
        $copoun=Copoun::fidnOrFail($id);
        $copoun->delete();
        $this->reset(['code','discount','loading']);
        session()->flash('delete_copoun','کوپون با موفقیت حذف شد ');
    }

    public function render()
    {
        $copouns=Copoun::latest()->paginate(10);
        return view('livewire.admin.copoun.index',compact('copouns'))->extends('layouts.admin')->section('content');
    }
}
