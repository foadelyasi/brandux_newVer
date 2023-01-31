<?php

namespace App\Http\Livewire\Front\Buying;


use App\Models\Order;
use Livewire\Component;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use function Livewire\str;


class Checkout extends Component
{
    public $address,$post_code;
    public function storeOrder(){
        $detailOrder=session()->get('ShoppingCart');
        $updateDetail=session()->get('UpdateShoppingCart');

        $discount_code_use=session()->get('discount_code_use');
        $name=str($detailOrder[0]['name']);
        $orderID=str($detailOrder[0]['orderID']);
        $userID=Auth()->id();
        $qty=str($updateDetail[0]['quantity']);
        $amount=intval($updateDetail[0]['totalAmount']);
        if ($detailOrder[0]['attributes']){
            $attr=$detailOrder[0]['attributes'];
        }else{
           $attr=null;
        }

        $description=str($updateDetail[0]['description']);
        $now=verta();
        $order=Order::create([
            'title'=>$name,
            'orderID'=>$orderID,
            'user_id'=>$userID,
            'quantity'=>$qty,
            'amount'=>$amount,
            'details'=>$attr,
            'address'=>$this->address,
            'post_code'=>$this->post_code,
            'description'=>$description,
            'discount_code_used'=>$discount_code_use,
            'notification'=>1,
            'history'=>$now,

        ]);
        $invoice=(new  Invoice)->amount($amount);
        $d=Payment::purchase($invoice,function ($driver,$transactionId)
        use($order){$order->update(['transaction_id'=>$transactionId]);}
        )->pay()->render();



    }

    public function render()
    {
        $orderData=session()->get('ShoppingCart');
        $updateData=session()->get('UpdateShoppingCart');
        return view('livewire.front.buying.checkout',compact('orderData','updateData'))->extends('layouts.Default')->section('content');
    }
}
