<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->integer('transaksi_id')->unsigned();
            
            $table->integer('harga_jual');
            $table->integer('jumlah');
            
            $table->timestamps();
        });
        
        Schema::table('detail_transaksi', function ($table) {
            $table->foreign('transaksi_id')
                ->references('transaksi_id')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detail_transaksi');
    }
}
