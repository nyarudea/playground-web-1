<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->integer('barang_id');
            $table->primary('barang_id');
            
            $table->integer('supplier_id')->unsigned();
            
            $table->text('barang_nama');
            $table->integer('barang_jumlah');
            $table->text('barang_jenis');
            $table->integer('barang_harga_satuan');
            
            $table->timestamps();
        });
        
        Schema::table('barang', function ($table) {
            $table->foreign('supplier_id')
                ->references('supplier_id')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('barang');
    }
}
