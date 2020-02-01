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
            'name' => 'Drinkware'
        ]);
        DB::table('tags')->insert([
            'name' => 'Apparel'
        ]);
        DB::table('tags')->insert([
            'name' => 'Knives/Tools'
        ]);
        DB::table('tags')->insert([
            'name' => 'Electronics'
        ]);
        DB::table('tags')->insert([
            'name' => 'Writing/Utensils'
        ]);
        DB::table('tags')->insert([
            'name' => 'Bags'
        ]);
        DB::table('tags')->insert([
            'name' => 'Miscellaneous'
        ]);
    }
}
