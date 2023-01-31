<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','description','category_id','made_by','image1','image2','image3',
    ];
    /**
     * @var mixed
     */


    public function category(){

        return $this->belongsTo(Category::class);
    }

}
