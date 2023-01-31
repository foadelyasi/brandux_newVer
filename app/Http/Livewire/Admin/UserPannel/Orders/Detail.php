<?php

namespace App\Http\Livewire\Admin\UserPannel\Orders;

use App\Models\Order;
use Livewire\Component;

class Detail extends Component
{
    public $ID,$name,$phone,$orderID,$qty,$amount,$attrs,$address,
        $post,$description,$history,$design,$file;

    protected $listeners=['open_description_of_deny_box'];

    public function mount($id){

        $order=Order::findOrFail($id);

        $this->ID=$order->id;
        $this->name=$order->user->name;
        $this->phone=$order->user->phone;
        $this->orderID=$order->orderID;
        $this->qty=$order->quantity;
        $this->amount=$order->amount;
        $this->attrs=$order->details;
        $this->address=$order->address;
        $this->post=$order->post_code;
        $this->description=$order->description;
        $this->history=verta($order->created_at);
        $this->file=$order->file;
    }

    public function descriptionOfDeny(){
        $order=Order::findOrFail($this->ID);
        $order->confirmed_design=-1;
        $order->description_of_deny=$this->description_of_deny;
        $order->save();
        session()->flash('description_of_deny');
    }



    public function render()
    {
        return view('livewire.admin.user-pannel.orders.detail')->extends('layouts.admin')->section('content');
    }
}
