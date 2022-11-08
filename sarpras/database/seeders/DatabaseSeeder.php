<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $admin=User::create([
        'name'=>'admin',
        'level'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('12345678'),
        'remember_token'=>Str::random(60),
       ]);


    }
}
