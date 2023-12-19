<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order__medicines', function (Blueprint $table) {
            $table->integer('order_id')->unsigned();
        //    $table->foreign('order_id')->references('id')->on('orders');
            $table->integer('medicine_id')->unsigned();
          //  $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order__medicines');
    }
};
