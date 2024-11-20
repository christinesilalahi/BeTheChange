<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=0; $i<35; $i++){
            DB::table('event_user')->insert([
                'user_id'=>rand(1, 20),
                'event_id'=>rand(1, 7)
            ]);
        }
    }
}
