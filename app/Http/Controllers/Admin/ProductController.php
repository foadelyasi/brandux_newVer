<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function edit(Product $product){


        return view('Admin.product.edit',compact('product'));

    }

    public function update(Product $product,Request $request){

        $this->validate($request,[
            'title'=>'required','en_title'=>'required',
            'category_id'=>'required','description'=>'required',
            'price'=>'required|numeric',
            'keywords'=>'required',
        ]);

        if ($request['title']){
            $slug=make_slug($request->title);
        }else{
            $slug=$product['slug'];
        }


        $product->title=$request->title;
         $product->en_title=$request->en_title;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->keywords=serialize(explode(",",$request->keywords));
        $product->slug=$slug;
        $product->save();

        session()->flash('update_product','محصول شما بروز رسانی شد');
        return redirect()->route('product');


    }
}
