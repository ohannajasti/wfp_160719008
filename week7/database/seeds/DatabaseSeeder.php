<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     //sebagai manajer nya, urutan pengerjaan sangat berpengaruh
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(SupplierSeeder::class);
        // $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(ProductTransactionSeeder::class);

    }
    //ngelakuin seeder tapi hanya 1 
    //1. dengan comment aja langsung 
    //2. opsi 2 di CLI : php artisan db:seed --class=NamaFileSeeder
    //contoh: php artisan db:seed --class=CategorySeeder
    
    //Cara install project laravel
    //1. bisa 

    //Untuk file seeder
    //1. buat melalui cmd
    // ada kalanya tidak bisa jalan 
}
