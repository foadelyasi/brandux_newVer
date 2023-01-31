<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{

    public $searchValue,$searchByStatus,$upload,$order_id,$design;


    protected $paginationTheme="bootstrap";
    protected $listeners=['refresh'=>'$refresh','upload'=>'ShowUploadFile','fadeUploadFile'];

    use WithFileUploads;

    protected $rules=[

        'design'=>'required|image|max:1024|mimes:jpg,png,jpeg',
    ];

    public function ShowUploadFile($id){
        $this->upload=1;
        $this->order_id=$id;

    }

    public function fadeUploadFile(){
        $this->reset(['upload']);
    }



    public function design($orderID,$val){

        $order=Order::findOrFail($orderID);
        $order->design=$val;
        $order->save();

    }

    public function delivery($orderID,$val){

        $order=Order::findOrFail($orderID);
        $order->send=$val;
        $order->save();

    }

    public function detail($id){

        return redirect()->route('detailOrder',$id);
    }

    public function search($value){
        $this->searchValue=$value;
        $this->emit('$refresh');
    }


    public function sendDesign($id){
        $this->validate();
        $order=Order::findOrFail($id);

        if ($order['file']){
            Storage::delete('upload/orders/'.$order->file);
            $IMGname=date('YmdHi').'_'.'design'.$order->orderID.'.'.$this->design->extension();
            $this->design->storeAs('upload/orders',$IMGname,'public');

        }else{
            $IMGname=date('YmdHi').'_'.'design'.$order->orderID.'.'.$this->design->extension();
            $this->design->storeAs('upload/orders',$IMGname,'public');
        }

        $order->file=$IMGname;
        $order->save();

        $this->reset(['upload']);

        session()->flash('sendDesign','طرح با موفقیت برای مشتری ارسال شد');

    }
    public function render()
    {
        if ($this->searchValue==null && $this->searchByStatus==null){
            $orders=Order::latest()->paginate(10);

        }else{

            $search=$this->searchValue;
            $sbs=$this->searchByStatus;
            if ($search){
                $orders=Order::when($search,function ($query,$search){
                    return $query->where('orderID','LIKE','%'.$search.'%');
                })->latest()->paginate(10);
            }

            if ($sbs){
                if ($sbs=='Design'){
                    $orders=Order::where('design',1)->latest()->paginate(10);

                }
                if ($sbs=='noDesign'){
                    $orders=Order::where('design',0)->latest()->paginate(10);
                }
                if ($sbs=='Confirm'){
                    $orders=Order::where('confirmed_design',1)->latest()->paginate(10);
                }
                if ($sbs=='noConfirm'){
                    $orders=Order::where('confirmed_design',0)->latest()->paginate(10);
                }
                if ($sbs=='Send'){
                    $orders=Order::where('send',1)->latest()->paginate(10);
                }
                if ($sbs=='noSend'){
                    $orders=Order::where('send',0)->latest()->paginate(10);
                }

            }

        }


        return view('livewire.admin.orders.index',compact('orders'))->extends('layouts.admin')->section('content');
    }
}
