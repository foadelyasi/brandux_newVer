<?php

namespace App\Http\Livewire\Front\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class WebDesign extends Component
{
    public $phone;

    protected $listeners=['account'];
    protected $rules=[
      'phone'=>'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
    ];

    public function savePhoneNumber(){
      DB::insert('insert into present (phone) values (?)', [$this->phone]);
      session()->flash('present','شماره ی شما در سیستم ثبت شد و مشاوران ما بزودی با شما تماس خواهند گرفت');
    }

    public function forgot(){
        session()->forget('present');
    }

    public function account($status){

        session()->forget('addToBasket');
        if ($status=='login'){
            return $this->redirectRoute('login.view');
        }else{
            return $this->redirectRoute('register.view');
        }

    }

    public function addPackageToBasket($totalprice,$package)
    {
        if (Auth::check()) {
            $userID = Auth()->id();

            $SKU = rand(100, 999);
            $cart[] = [
                'orderID' => 'web' . $SKU . $userID,
                'product_id' => null,
                'userID' => $userID,
                'name' => $package,
                'price' => $totalprice,
                'quantity' => 1,
                'attributes' => null,
                'image' => null
            ];
            session()->put(['ShoppingCart' => $cart]);

            return redirect()->route('ShoppingCart');
        } else {
            session()->flash('addToBasket');
        }
    }

    public function render()
    {
        return view('livewire.front.services.web-design')->extends('layouts.Default')->section('content');
    }
}
