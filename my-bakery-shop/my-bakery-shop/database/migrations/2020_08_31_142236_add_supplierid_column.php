<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSupplieridColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // 1. menambah kolom terlebih dahulu
            $table->unsignedBigInteger('supplier_id'); 
        
            // 2. menambah FK
            $table->foreign('supplier_id')->references('id')->on('suppliers');
                // nama field di products           field di tabel tujuan ->on(nama tabel tujuan)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['supplier_id']); // 2
            
            $table->dropColumn('supplier_id'); // 1 
        });
    }
}
