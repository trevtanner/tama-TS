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
            'name' => 'Hoodies'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Shirts'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Headware'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Stainless Steel Tumblers'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Ceramic Mugs'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Glassware'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Backpacks'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Duffel'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Knives'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Tools'
        ]);
    }
}
