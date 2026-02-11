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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->unique();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('user_id');
            $table->integer('qty');
            $table->decimal('harga_barang', 12, 2);
            $table->decimal('total_harga', 12, 2);
            $table->enum('jenis_bayar', ['cash', 'transfer', 'qris', 'debit', 'kredit']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
