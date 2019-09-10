<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Apparel'
        ]);
        DB::table('tags')->insert([
            'name' => 'Drinkware'
        ]);
        DB::table('tags')->insert([
            'name' => 'Bags'
        ]);
        DB::table('tags')->insert([
            'name' => 'Tactical'
        ]);
        DB::table('tags')->insert([
            'name' => 'Coins'
        ]);
        DB::table('tags')->insert([
            'name' => 'Miscellaneous'
        ]);
    }
}
