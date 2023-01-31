<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'username','comment','status','type','parent_id','article_id','product_id','star',
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function reply(){

        return $this->hasMany(Comment::class,'parent_id');
    }
}
