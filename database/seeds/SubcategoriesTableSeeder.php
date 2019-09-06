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
            'name' => 'T-Shirt'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sweatshirt'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Sweatpants'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Shorts'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Backpack'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Duffel Bag'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Snapback'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Fitted Hat'
        ]);
    }
}
