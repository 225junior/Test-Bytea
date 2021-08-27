<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('fr');

        for ($i=1; $i < 11; $i++) { 
            
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
            ]);
        }
    }
}
