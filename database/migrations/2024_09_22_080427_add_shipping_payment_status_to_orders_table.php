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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('shipping_address')->after('total_amount'); // Tambahkan shipping_address
            $table->string('payment_method')->after('shipping_address'); // Tambahkan payment_method
            $table->string('status')->after('payment_method'); // Tambahkan status
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('shipping_address');
            $table->dropColumn('payment_method');
            $table->dropColumn('status');
        });
    }
};