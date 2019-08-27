<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => 'Nike'
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Yeti'
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Allison'
        ]);
    }
}
