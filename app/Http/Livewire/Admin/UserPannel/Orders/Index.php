<?php

namespace App\Http\Livewire\Admin\UserPannel\Orders;

use App\Models\Order;
use Livewire\Component;

class Index extends Component
{
    public $description_of_deny,$description_of_deny_box,$confirm_design_section,$orderID;
    public function detail($id){

        return redirect()->route('user.order.derails',$id);
    }
    protected $listeners=['open_description_of_deny_box','confirm_design_section','close_description','refresh'=>'$refresh'];

    public function confirm_design_section($id){
        $this->orderID=$id;
        $this->confirm_design_section=1;
    }




    public function confirm_design(){

        $order=Order::findOrFail($this->orderID);
        $order->confirmed_design=1;
        $order->save();
        $this->reset(['orderID','confirm_design_section']);
        session()->flash('confirm_design','شما طرح سفارش خود را برای ادامه ی مراحل تولید تایید کردید');
    }

    public function open_description_of_deny_box(){
        $this->description_of_deny_box=1;
    }

    public function close_description(){
        $this->description_of_deny_box=0;
    }

    public function descriptionOfDeny(){
        $order=Order::findOrFail($this->orderID);
        $order->confirmed_design=2;
        $order->description_of_deny=$this->description_of_deny;
        $order->save();
        $this->reset(['description_of_deny','description_of_deny_box','confirm_design_section','orderID']);
        $this->emit('refresh');
        session()->flash('description_deny','با موفقیت برای تیم طراحی ارسال شد');
    }

    public function render()
    {
        $userID=Auth()->id();
        $orders=Order::where('user_id',$userID)->latest()->paginate(10);
        return view('livewire.admin.user-pannel.orders.index',compact('orders'))->extends('layouts.admin')->section('content');
    }
}
