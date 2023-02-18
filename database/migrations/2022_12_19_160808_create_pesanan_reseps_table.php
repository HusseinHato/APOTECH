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
        Schema::create('pesanan_reseps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('resep_id')->constrained('reseps')->onDelete('cascade');
            $table->string('obat_obat');
            $table->integer('total_harga');
            $table->enum('status', ['Diproses', 'Dikirim', 'Diterima']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_reseps');
    }
};
