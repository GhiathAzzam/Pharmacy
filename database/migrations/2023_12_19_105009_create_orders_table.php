<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // ID
            $table->bigInteger('warehouse_id')->unsigned(); // Warehouse_ID
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
            $table->bigInteger('pharmacist_id')->unsigned(); // Pharmacist_ID
            $table->foreign('pharmacist_id')->references('id')->on('pharmacists');
            $table->dateTime('date_ordered'); // Date_Ordered
            $table->decimal('total_price', 10, 2); // Total_Price
            $table->string('status', 255); // Status
            $table->string('payment_status', 255); // Payment_Status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
