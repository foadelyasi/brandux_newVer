<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','description','category_id','price','image','image2','keywords','status','slug',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function attr(){

        return $this->belongsToMany(Attr::class)->withPivot('value','price')->withTimestamps();
    }

    public function attrForSelect(){

        return $this->hasOne(AttrForSelect::class);
    }
}
