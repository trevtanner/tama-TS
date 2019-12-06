<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Test Product 1',
            'productnumber' => 'NI-0123',
            'shortdescript' => 'Large capacity for the gym or light travel. The cavernous interior easily holds a complete change of clothes and shoes.',
            'longdescript' => 'test12345678',
            'image' => 'image',
            'supplier_id' => '1',
        ]);
    }
}
