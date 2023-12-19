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
        Schema::create('medicines', function (Blueprint $table) {
                $table->id(); // ID
                $table->bigInteger('category_id')->unsigned();
                //$table->foreign('category_id')->references('id')->on('categories');
              $table->integer('warehouse_id')->unsigned(); // Warehouse_ID
            //    $table->foreign('warehouse_id')->references('id')->on('warehouses');
                $table->string('scientific_name', 30); // Scientefic_Name
                $table->string('commercial_name', 30); // Commercial_Name
                $table->string('company', 30); // Company
                $table->text('description'); // Descreption
                $table->integer('quantity');
                $table->decimal('price', 10, 2);
                $table->date('expiration_date');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
