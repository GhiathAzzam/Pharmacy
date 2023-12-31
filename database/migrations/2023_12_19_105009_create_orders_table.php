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
            $table->foreignId('warehouse_id'); // Warehouse_ID
            $table->foreignId('pharmacist_id'); // Pharmacist_ID

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
