<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create = berarti kita akan membuat tabel
        // Schema::table = kita akan melakukan sesuatu di dalam tabel tersebut
        Schema::table('products', function (Blueprint $table) {
            // 1. menambah kolom terlebih dahulu
            $table->unsignedBigInteger('category_id'); 
        
            // 2. menambah FK
            $table->foreign('category_id')->references('id')->on('categories');
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
        // HARUS KEBALIKAN DARI FUNGSI UP()
        Schema::table('products', function (Blueprint $table) { 
            $table->dropForeign(['category_id']); // 2
            
            $table->dropColumn('category_id'); // 1 
        });
    }
}
