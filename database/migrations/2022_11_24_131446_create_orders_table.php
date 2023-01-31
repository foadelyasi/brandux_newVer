<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('amount');
            $table->string('details');
            $table->unsignedInteger('quantity');
            $table->string('address');
            $table->string('post_code');
            $table->string('discount_code_used')->nullable();
            $table->unsignedInteger('design')->default('0');
            $table->unsignedInteger('confirmed_design')->default('0');
            $table->unsignedInteger('ready_to_send')->default('0');
            $table->unsignedInteger('send')->default('0');
            $table->unsignedInteger('payment_status')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
