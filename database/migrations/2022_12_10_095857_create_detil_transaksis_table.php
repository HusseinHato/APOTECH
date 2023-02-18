<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_transaksis', function (Blueprint $table) {
            $table->foreignId('obat_id')->constrained('obats')->onDelete('cascade');
            $table->foreignId('transaksi_id')->constrained('transaksis')->onDelete('cascade');
            $table->integer('qty');
            $table->integer('pricesum');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_transaksis');
    }
};
