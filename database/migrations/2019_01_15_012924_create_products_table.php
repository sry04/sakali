<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kd_product');
            $table->string('title');
            $table->integer('tipe')->unsigned();
            $table->string('kategori');
            $table->date('restock');
            $table->integer('jml_klik');
            $table->enum('status',["publish","unpublish"]);
            $table->string('link',255);
            $table->timestamps();

            $table->foreign('tipe')->references('id')->on('tipes');
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
