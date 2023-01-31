<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;
    public $title,$en_title,$category_id,$description,$status=1,$img=null,$img2=null,$price,$keywords,$loading,$upload=0,$productIDforIMG;
    public $photo,$photo2;

    protected $listeners=['category_id'=>'categoryID','upload'=>'ShowUploadFile','fadeUploadFile'];
    protected $rules=[
      'title'=>'required','en_title'=>'required',
      'category_id'=>'required','description'=>'required',
      'price'=>'required|numeric',
      'keywords'=>'required',
    ];
    protected $paginationTheme="bootstrap";

    public function categoryID($id){
        $this->category_id=$id;
    }


    public function ShowUploadFile($id){
        $this->upload=1;
        $this->productIDforIMG=$id;
    }

    public function fadeUploadFile(){
        $this->reset(['upload']);
    }

    public function store(){

      $keywords=serialize(explode(",",$this->keywords));

            $slug=make_slug($this->title);

      Product::create([
         'title'=>$this->title,
         'slug'=>$slug,
         'category_id'=>$this->category_id,
         'description'=>$this->description,
         'status'=>$this->status,
         'price'=>$this->price,
          'image'=>$this->img,
          'image2'=>$this->img2,
          'keywords'=>$keywords,
      ]);

        $this->reset(['title','en_title','category_id','description','price']);

      session()->flash('add_product','محصول شما با موفقیت اضافه شد');


    }

    public function delete($id){

        $this->loading=$id;
        $product=Product::findOrFail($id);
        $pivotTable=DB::table('attr_product')->where('product_id',$id);
        if ($pivotTable!=null){
            $pivotTable->delete();
        }
        $product->delete();
        session()->flash('delete_product','محصول با موفقیت حذف شد');
        $this->reset(['productIDforIMG','loading','upload']);
    }

    public function IMGupload(Product $product){

        $this->validate([
            'photo'=>'required|image|max:1024|mimes:jpg,png,jpeg',
            'photo2'=>'image|max:1024|mimes:jpg,png,jpeg'
        ]);
       $IMGname=date('YmdHi').'_'.'Product'.$this->productIDforIMG.'.'.$this->photo->extension();
       $this->photo->storeAs('upload/products',$IMGname,'public');
        $product['image']=$IMGname;

        if ($this->photo2!=null){
            $IMGname2=date('YmdHi').'_'.'ProductG'.$this->productIDforIMG.'.'.$this->photo2->extension();
            $this->photo->storeAs('upload/products',$IMGname2,'public');
            $product['image2']=$IMGname2;
        }else{
            $product['image2']=null;
        }

        $product->save();
        $this->reset(['productIDforIMG','loading','upload']);
        session()->flash('add_product','عکس محصول با موفقیت ذخیره شد');

    }

    public function render()
    {
        $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
        $products=Product::latest()->paginate(8);
        return view('livewire.admin.product.index',compact('categories','products'))->extends('layouts.admin')->section('content');
    }
}
