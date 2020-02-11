<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'name' => 'Tees'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Polos'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Jackets'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Hoodies'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Pullovers'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Speakers'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Chargers'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Journal Books'
        ]);
    }
}
