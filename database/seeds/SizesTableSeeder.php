<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'name' => 'SM'
        ]);
        DB::table('sizes')->insert([
            'name' => 'MD'
        ]);
        DB::table('sizes')->insert([
            'name' => 'LG'
        ]);
    }
}
