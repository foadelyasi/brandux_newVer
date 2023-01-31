<?php

namespace App\Http\Livewire\Admin\Attr;

use App\Models\Attr;
use App\Models\AttrForSelect;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Product;
use phpDocumentor\Reflection\Types\This;

class AddToProduct extends Component
{
    public  $productID,$attrID,$price,$value,$priceEdit,$valueEdit,$loading,$attrIDforEditForm;

    protected $listeners=['ShowEditFormAttrAddToProduct'];
    protected $rules=[
      'productID'=>'required','attrID'=>'required','price'=>'required|numeric','value'=>'required|string'
    ];

    public function ShowEditFormAttrAddToProduct($status,$attrID){
        if ($status=='cancel'){
            $this->valueEdit=0;
            $this->priceEdit=0;
        }else{
            $this->valueEdit=1;
            $this->priceEdit=1;
            $this->attrIDforEditForm=$attrID;
        }
    }

    public function store(){


       $this->validate();

        $product=Product::findOrFail($this->productID);
        $attr=Attr::findOrFail($this->attrID);
        $attrSelect=AttrForSelect::where('product_id',$this->productID)->where('attr_id',$this->attrID)->first();
        $product->attr()->attach($this->attrID,['value'=>$this->value,'price'=>$this->price]);
        if (!isset($attrSelect)){

            $array[]=['value'=>$this->value , 'price'=> $this->price];

            $vp=serialize($array);

            AttrForSelect::create([
                'attr_name'=>$attr->title,
                'product_id'=>$this->productID,
                'attr_id'=>$this->attrID,
                'value_price'=>$vp
            ]);

        }else{
           $attrSelectAlter=AttrForSelect::where('attr_id',$this->attrID)->first();
           $array=unserialize($attrSelectAlter->value_price);

           $array[] = ['value'=>$this->value ,'price'=>$this->price];
           $vp=serialize($array);
           $attrSelectAlter->value_price=$vp;
           $attrSelectAlter->save();
        }


        $this->reset(['productID','attrID','value','price']);
        session()->flash('add_attr','ویژگی مد نظر با موفقیت به محصول اختصاص یافت');

    }

    public function update($productID,$attrID){
        $this->loading=$attrID;
        $product=Product::findOrFail($productID);
        $pivotTable=DB::table('attr_product')->where('attr_id',$attrID)->where('product_id',$productID)->first();
        if ($this->value==null){
            $this->value=$pivotTable->value;
        }
        if ($this->price==null){
            $this->price=$pivotTable->price;
        }

        if ($this->value!=null || $this->price!=null){

            $AttrSelect=AttrForSelect::where('product_id',$productID)->where('attr_id',$attrID)->first();
            $arrayvp=unserialize($AttrSelect->value_price);
            foreach ($arrayvp as $key => $value){

                if ($value['value']==$pivotTable->value && $value['price']==$pivotTable->price){
                    $arrayvp[$key]=['value'=>$this->value,'price'=>$this->price];
                }

            }

            $reindex=array_values($arrayvp);
            $vp=serialize($reindex);
            $AttrSelect->value_price=$vp;
            $AttrSelect->save();

        }

        $product->attr()->updateExistingPivot($attrID,['value'=>$this->value,'price'=>$this->price]);
        $this->reset(['productID','attrID','value','price','loading','valueEdit','priceEdit']);
        session()->flash('update_attr','مقادیر با موفقیت بروزرسانی شدند');

    }

    public function delete($productID,$attrID,$value,$price){

        $this->loading=$attrID;

        $pivotTable=DB::table('attr_product')->where('attr_id',$attrID)->where('product_id',$productID)->first();
        $AttrSelect=AttrForSelect::where('attr_id',$attrID)->where('product_id',$productID)->first();
        if (isset($AttrSelect)){

            $attrselectvp=unserialize($AttrSelect->value_price);

            foreach($attrselectvp as $key => $value){

                if ($value['value']==$pivotTable->value && $value['price']==$pivotTable->price){
                    unset($attrselectvp[$key]);
                }

            }
            $reIndex=array_values($attrselectvp);
            $vp=serialize($reIndex);
            $AttrSelect->value_price=$vp;
            $AttrSelect->save();
        }
        DB::table('attr_product')->where('attr_id',$attrID)
            ->where('product_id',$productID)
            ->where('value',$value)
            ->where('price',$price)->delete();
        session()->flash('delete_attr','ویژگی با موفقیت حذف شد');
    }



    public function render()
    {
        $products=Product::get();
        $productsList=Product::get();
        $attrs=Attr::get();
        return view('livewire.admin.attr.add-to-product',compact('products','productsList','attrs'))->extends('layouts.admin')->section('content');
    }
}
