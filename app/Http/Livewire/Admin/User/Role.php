<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role as Per;
use Livewire\Component;

class Role extends Component
{
    public $loading,$title;

    protected $rules=[
        'title'=>'required'
    ];


    public function store(){
        $this->validate();

        Per::query()->create([
            'title'=>$this->title
        ]);

        $this->reset(['title']);

        session()->flash('add_permission','دسترسی جدید با موفقیت اضافه شد');
    }

    public function delete(Role $role){
        $this->loading=$role->id;
        $role->delete();
        session()->flash('add_permission','نقش مورد نظر با موفقیت حذف شد');
    }

    public function render()
    {
        $roles=Per::latest()->paginate(10);
        return view('livewire.admin.user.role',compact('roles'))->extends('layouts.admin')->section('content');
    }
}
