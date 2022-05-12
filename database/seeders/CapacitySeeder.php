<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capacities')->insert([
            'car' => 10,
            'bicycle' => 0,
            'motorcycle' => 0,
            'parking_id' => 1,
        ]);
    }
}
