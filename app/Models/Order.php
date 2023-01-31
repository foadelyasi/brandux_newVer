<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
      'title','user_id','amount','details','quantity','discount_code_used','address','post_code','payment_status','file',
        'orderID','transaction_id','description','notification','history',
    ];

    protected $casts = ['details' => 'array'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
