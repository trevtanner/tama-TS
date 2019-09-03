<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Trevor Tanner',
            'email' => 'trevtanner@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password')
        ]);
    }
}
