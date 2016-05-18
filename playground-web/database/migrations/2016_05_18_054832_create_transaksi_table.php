<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('transaksi_id');
            
            $table->integer('pembeli_id')->unsigned();
            $table->integer('petugas_id')->unsigned();
            
            $table->timestamp('transaksi_tanggal');
            
            $table->timestamps();
        });
        
        Schema::table('transaksi', function ($table) {
            $table->foreign('pembeli_id')
                ->references('pembeli_id')->on('pembeli');
            $table->foreign('petugas_id')
                ->references('petugas_id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksi');
    }
}
