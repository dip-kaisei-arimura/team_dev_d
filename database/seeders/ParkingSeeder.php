<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parkings')->insert([
            'name' => 'サンプル駐車場',
            'rate' => 150,
            'image_url' => "images/parkings/sampleparking.jpeg",
            'address' => '東京都港区六本木3-2-1',
            'user_id' => 1,
            'listing_end_date' => new DateTime('2023-01-01 00:00:00'),
            'is_available' => true,
        ]);
    }
}
