<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name_rooms' => 'Mawar Rooms',
                'number_rooms' => 'A10',
                'facility_rooms' => 'Kamar tidur, Almari, Kamar mandi dalam, Meja, Kursi',
                'price_rooms' => '200.000'
            ],
            [
                'name_rooms' => 'Melati Rooms',
                'number_rooms' => 'A11',
                'facility_rooms' => 'Kamar tidur, Almari, Kamar mandi dalam, Meja, Kursi, TV, AC, Dapur',
                'price_rooms' => '450.000'
            ],
            [
                'name_rooms' => 'Anggrek Rooms',
                'number_rooms' => 'A12',
                'facility_rooms' => 'Kamar tidur, Almari, Kamar mandi luar, Meja, Kursi',
                'price_rooms' => '140.000'
            ],
            [
                'name_rooms' => 'Kamboja Rooms',
                'number_rooms' => 'A13',
                'facility_rooms' => 'Kamar tidur, Almari, Kamar mandi luar',
                'price_rooms' => '200.000'
            ],
        ];
        DB::table('rooms')->insert ($data);
    }
}
