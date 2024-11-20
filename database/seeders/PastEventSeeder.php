<?php

namespace Database\Seeders;

use App\Models\PastEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PastEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');
        for($i=0; $i<10; $i++){
            PastEvent::create([
                'organization'=>1,
                'name'=>'tempname',
                'description'=>'tempname',
                'date'=>$faker->dateTimeThisYear,
                'location'=>$faker->address,
                'poster'=>'tempposter',
                'picture'=>'temppicture',
                'report'=>'tempreport'
            ]);
        }
    }
}
