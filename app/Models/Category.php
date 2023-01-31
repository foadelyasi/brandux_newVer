<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','parent_id','en_title',
    ];

    public function children()
    {
        return  $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function product(){

        return $this->hasMany(product::class,'category_id');
    }

    public function portfolio(){

        return $this->hasMany(Portfolio::class,'category_id');
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
