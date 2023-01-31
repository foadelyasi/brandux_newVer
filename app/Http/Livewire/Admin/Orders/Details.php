<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\This;

class Details extends Component
{
    public $ID,$name,$phone,$orderID,$qty,$amount,$attrs,$address,$post,$description,$history,$design;



    public function mount($id){

        $order=Order::findOrFail($id);

        $order->update(['notification'=>0]);
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
    }


    public function render()
    {
        return view('livewire.admin.orders.details')->extends('layouts.admin')->section('content');
    }
}
