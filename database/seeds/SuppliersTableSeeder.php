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
            'name' => 'Under Armour'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'CRKT'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Smith & Wesson'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Gerber'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Otter Box'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Quicksilver'
        ]);
    }
}
