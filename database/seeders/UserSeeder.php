<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::exists()) {
            User::insert([
               [
                  'name' => 'Rahim',
                  'email' => 'rahim@gmail.com',
                  'password'=> bcrypt('password'),
                  'role' => 'admin'
               ],
               [
                  'name' => 'Karim',
                  'email' => 'karim@gmail.com',
                  'password'=> bcrypt('password'),
                  'role' => 'user'
               ]
            ]);
        }
    }
}
