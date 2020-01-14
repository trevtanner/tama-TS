<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuppliersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(SubcategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(ProductsTableSeeder::class);
    }
}
