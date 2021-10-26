<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->integer('price_production');
            $table->integer('price_sell');
            $table->integer('stock');
            $table->string('filename');
            $table->timestamps();

            $table->foreignId('supplier_id');
            $table->foreign('supplier_id')->on('suppliers')->references('id')->onDelete('cascade')->onUpdate('cascade');

            
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
