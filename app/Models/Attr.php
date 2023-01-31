<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
    ];


    public function product(){

        return $this->belongsToMany(Product::class)->withPivot('value','price')->withTimestamps();
    }
}
