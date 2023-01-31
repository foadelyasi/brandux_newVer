<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttrForSelectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attr_for_selects', function (Blueprint $table) {
            $table->id();
            $table->string('attr_name');
            $table->foreignId('product_id')->constrained();
            $table->foreignId('attr_id')->constrained();
            $table->string('value_price');
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
        Schema::dropIfExists('attr_for_selects');
    }
}
