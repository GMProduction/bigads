<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('url');
            $table->enum('jenis', ['Pop Up', 'Banner'])->default('Banner');
            $table->integer('traffic')->default(0);
            $table->string('ukuran');
            $table->integer('harga')->default(0);
            $table->string('images');
            $table->timestamps();
        });

        Schema::create('transactions', function (Blueprint $table){
           $table->id();
           $table->date('tgl_mulai');
           $table->date('tgl_akhir');
           $table->integer('harga');
           $table->bigInteger('user_id')->unsigned();
           $table->bigInteger('product_id')->unsigned();
           $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('product_id')->references('id')->on('products');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
