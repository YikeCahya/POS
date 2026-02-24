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
        Schema::create('t_stok', function (Blueprint $table) {
                $table->id('stok_id');
                $table->unsignedBigInteger('barang_id'); //Indexing untuk foreignKey
                $table->unsignedBigInteger('user_id'); //Indexing untuk foreignKey
                $table->date('stok_tanggal');
                $table->integer('stok_jumlah');
                $table->timestamps();
    
                // Mendefinisikan foreign key pada kolom barang_id mengacu pada kolom barang_id di tabel m_barang
                $table->foreign('barang_id')->references('barang_id')->on('m_barang');
                // Mendefinisikan foreign key pada kolom user_id mengacu pada kolom user_id di tabel m_user
                $table->foreign('user_id')->references('user_id')->on('m_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
