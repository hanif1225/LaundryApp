<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        User::create([
            'role'      => 'admin',
            'address'   => 'No Data',
            'no_hp'     => 'No Data',
            'name'      => 'admin',
            'username'  => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('password'),
            'picture'   => 'user.jpg'
        ]);
    }
}
