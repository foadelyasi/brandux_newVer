<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttrForSelect extends Model
{
    use HasFactory;

    protected $fillable=['attr_name','product_id','value_price','attr_id'];

    public function product(){

        return $this->belongsTo(Product::class,'product_id');
    }
}
