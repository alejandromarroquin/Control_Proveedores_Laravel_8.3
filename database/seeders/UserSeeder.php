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
        User::insert([
            'name' => "Name Admin",
            'email' => "admin@gmail.com",
            'password' => \Hash::make('admin123'),
            "type" => "A"
        ]);

        User::insert([
            'name' => "Name Provider",
            'email' => "provider@gmail.com",
            'password' => \Hash::make('provider123'),
            "type" => "A",
            "rfc" => "SAOK790530QZ21"
        ]);
    }
}
