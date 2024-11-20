<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('id_ID');
        for($i=0; $i<10; $i++){
                User::create([
                    'name'=> $faker->name,
                    'picture'=>'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png',
                    'email'=>$faker->unique()->email,
                    'phone'=>$faker->unique()->phoneNumber,
                    'password'=>$faker->password,
                    'type'=>'volunteer'
                ]);
        }
    }
}
