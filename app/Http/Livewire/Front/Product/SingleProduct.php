<?php

namespace App\Http\Livewire\Front\Product;

use App\Models\AttrForSelect;
use App\Models\Comment;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SingleProduct extends Component
{
    public $product,$key,$properties,$totalPrice,$price,$attrName,$attrVal,$ogPrice,$qty,$description,
    $comment,$username,$product_id,$star;

    public function mount($slug){
        $product=$this->product=Product::where('slug',$slug)->first();
         $this->product_id=$product->id;
        $this->properties=AttrForSelect::where('product_id',$product->id)->get();

        $this->totalPrice=$this->product->price;
        $this->ogPrice=$this->product->price;
        $this->description=$product->description;

    }
    protected $listeners=['account','valueAttr','rating','forgotRatingSession','forgotCommentSession'];

    public function account($status){

        session()->forget('addToBasket');
        if ($status=='login'){
            return $this->redirectRoute('login.view');
        }else{
            return $this->redirectRoute('register.view');
        }

    }
    public function valueAttr($value){

        dd($value);
        $this->attrVal=$value;
    }


    public function totalPrice(){


        $countAttr=count($this->properties);

        if ($countAttr!=count($this->price)){

            session()->flash('nullAttr','لطفا تمام ویژگی ها را انتخاب کنید');

        }else{

            for ($i=1;$i<=count($this->price);$i++){
                $price=explode(",",$this->price[$i]);
                $arrayprice[]=$price[0];

            }
            $sum=array_sum($arrayprice);
            $this->totalPrice=$sum+$this->ogPrice;
        }



    }

    public function addToBasket(Product $product)
    {

        for ($i = 1; $i <= count($this->price); $i++) {
            $value = explode(",", $this->price[$i]);
            $arrayattr[] = ['attr' => $value[2], 'value' => $value[1]];

        }

        if (Auth::check()) {
            $userID = Auth()->id();

            $SKU = rand(100, 999);
            $cart[] = [
                'orderID' => $product->id . $SKU . $userID,
                'product_id' => $product->id,
                'userID' => $userID,
                'name' => $product->title,
                'price' => $this->totalPrice,
                'quantity' => 1,
                'attributes' => $arrayattr,
                'image' => $product->image
            ];
            session()->put(['ShoppingCart' => $cart]);

            return redirect()->route('ShoppingCart');
        } else {
            session()->flash('addToBasket');
        }
    }

    public function saveComment(){

        if ($this->star==null){
           session()->flash('rating','اون ستاره ها رو میشه خالی نذاری ؟ یکم بهمون بدی قبولت داریم');
        }

        Comment::query()->create([
            'article_id'=>null,
            'product_id'=>$this->product_id,
            'parent_id'=>null,
            'username'=>$this->username,
            'type'=>'product',
            'comment'=>$this->comment,
            'status'=>0,
            'star'=>null,
        ]);

        $this->reset(['username','comment','star']);

        session()->flash('add_comment','نظر شما با موفقیت ثبت شد و در انتظار تایید مدیر می باشد');

    }

    public function rating($star){
        $this->star=$star;
    }

    public function forgotRatingSession(){

        session()->forget('rating');
    }

    public function forgotCommentSession(){
        session()->forget('add_comment');
    }


    public function render()
    {
        return view('livewire.front.product.single-product')->extends('layouts.Default')->section('content');
    }
}
