<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('home_carousel')->insert([
            [
                'Product name'=>"Electric Guitar",
                'Description of product'=>"Brown Electric Guitar - Trending now!",
                'Price'=>"199",
                'Image link'=>"https://cdn.discordapp.com/attachments/1032233343707791394/1044632922180833280/other-g5b606e149_1920.jpg"
            ],
            [
                'Product name'=>"Acoustic Guitar",
                'Description of product'=>"Brown Acoustic Guitar - Trending now!",
                'Price'=>"99",
                'Image link'=>"https://cdn.discordapp.com/attachments/1032233343707791394/1044634237703295117/acoustic_guitar_2_1.jpg"  
            ],
            [
                'Product name'=>"Bass Guitar",
                'Description of product'=>"Black Bass Guitar - Trending now!",
                'Price'=>"249",
                'Image link'=>"https://cdn.discordapp.com/attachments/1032233343707791394/1044647136496717914/black_bass_4_1.jpg"
            ]
        ]);
    }
}