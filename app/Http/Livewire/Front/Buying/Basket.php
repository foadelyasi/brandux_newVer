<?php

namespace App\Http\Livewire\Front\Buying;

use App\Models\Copoun;
use App\Models\Order;
use Darryldecode\Cart\Cart;
use Livewire\Component;


class Basket extends Component
{
    public $qty=1,$discount,$description,$amountAfterDiscount;

    protected $listeners=['newAmount'];

    public function increase(){
       $this->qty++;
    }

    public function decrease(){
        $this->qty--;
    }


    public function clearOrder(){
        session()->forget('ShoppingCart');
    }

    public function discount(){
        $shopSession=session()->get('ShoppingCart');
        $newAmount=$shopSession[0]['price']*$this->qty;
        $orders=Order::where('discount_code_used',$this->discount)->get();
        if ($orders=null){
            session()->flash('discount_fail','شما قبلا از این کد استفاده کردید');
        }else{

            $disAmount=Copoun::where('code',$this->discount)->first();
            if ($disAmount){
                $discount=($disAmount->discount/100)*$newAmount;
                $this->amountAfterDiscount=$newAmount-$discount;
                session()->put(['discount_code_use',$this->discount]);
                session()->flash('discount_success','کد تخفیف اعمال شد');
            }else{
                session()->flash('discount_noExist','کد تخفیف اشتباه است');
            }

        }
    }

    public function savingOrder(){
        $shopSession=session()->get('ShoppingCart');
        if ($this->amountAfterDiscount){
            $newAmount=$this->amountAfterDiscount;
        }else{
            $newAmount=$shopSession[0]['price']*$this->qty;
        }

        $cart[]=['totalAmount'=>$newAmount,'quantity'=>$this->qty,'description'=>$this->description];
        session()->put(['UpdateShoppingCart'=>$cart]);



        return redirect()->route('Checkout');
    }

    public function render()
    {

        $items=session()->get('ShoppingCart');

        return view('livewire.front.buying.basket',compact('items'))->extends('layouts.Default')->section('content');
    }
}
