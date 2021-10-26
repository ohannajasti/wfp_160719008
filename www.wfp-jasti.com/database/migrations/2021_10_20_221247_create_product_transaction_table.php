<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transaction', function (Blueprint $table) {
            $table->foreignId('product_id');
            $table->foreign('product_id')->on('products')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('transaction_id');
            $table->foreign('transaction_id')->on('transactions')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('quantity');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_transaction');
    }
}
