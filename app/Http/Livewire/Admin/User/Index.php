<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $name,$email,$role,$phone;

    protected $rules=[
      'name'=>'required', 'phone'=>'required|regex:/(09)[0-9]{9}/|digits:11|numeric', 'role'=>'required'
    ];

    public function store(){
       $this->validate();

       User::query()->create([
          'name'=>$this->name,
          'phone'=>$this->phone,
          'email'=>$this->email,
          'level'=>$this->role,
       ]);
       $this->reset(['name','phone','role','email']);
       session()->flash('add_user','کاربر جدید با موفقیت اضافه شد');
    }

    public function edit($id){
      return redirect()->route('user.edit',$id);
    }

    public function render()
    {
        $users=User::latest()->paginate(10);
        $roles=Role::all();
        return view('livewire.admin.user.index',compact('users','roles'))->extends('layouts.admin')->section('content');
    }
}
