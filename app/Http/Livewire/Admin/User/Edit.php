<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $name,$role,$phone,$email;

    public function mount($id){
        $user=User::findOrFail($id);
        $this->name=$user->name;
        $this->role=$user->level;
        $this->phone=$user->phone;
        $this->email=$user->email;
    }

    public function update(User $user){
        $user->update([
           'name'=>$this->name,
           'phone'=>$this->phone,
           'email'=>$this->email,
           'level'=>$this->role,
        ]);

        session()->flash('update_user','کاربر مورد نظر با موفقیت بروز رسانی شد');

        return redirect()->route('user');
    }

    public function render()
    {
        return view('livewire.admin.user.edit');
    }
}
