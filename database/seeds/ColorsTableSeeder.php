<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            'name' => 'Red'
        ]);
        DB::table('colors')->insert([
            'name' => 'Blue'
        ]);
        DB::table('colors')->insert([
            'name' => 'Green'
        ]);
        DB::table('colors')->insert([
            'name' => 'Black'
        ]);
        DB::table('colors')->insert([
            'name' => 'White'
        ]);
    }
}
