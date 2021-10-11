<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert(
            ['name' => 'Pelajaran'],
        );

        DB::table('classifications')->insert(
            ['name' => 'Novel']

        );
        DB::table('classifications')->insert(
            ['name' => 'komik']
        );
    }
}
