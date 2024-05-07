<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $data = [
            [
                "name" => "Asus",
                "code" => "111",
                "image" => "111111"
            ],
            [
                "name" => "Lenovo",
                "code" => "222",
                "image" => "111111"
            ],
            [
                "name" => "HP",
                "code" => "333",
                "image" => "111111"
            ]
        ];

        foreach($data as $item) {
            DB::table('laptop')->insert([
                'name' => $item["name"],
                'code' => $item["code"],
                'image' => $item["image"],
            ]);
        }
    }
}
