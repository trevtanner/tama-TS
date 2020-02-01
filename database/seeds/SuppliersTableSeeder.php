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
            'name' => 'Yeti'
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Nalgene H2O'
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Benshot'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Camelback'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'K-Bar'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'CRKT'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Smith & Wesson'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Nite ize'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Castelli'
        ]);
        DB::table('suppliers')->insert([
            'name' => 'Garland Logotop'
        ]);
    }
}
