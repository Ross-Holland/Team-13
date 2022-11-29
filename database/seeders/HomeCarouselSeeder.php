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
                    'Product name'=>"Bender Electric Stratocaster V3 Black",
                    'Description of product'=>"This easy to play, classic, sleak black Stratocaster is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                    'Price'=>"399",
                    'Image link'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307515405082634/electric_guitar_dept.png"
                ],
                [
                    'Product name'=>"Ace Acoustic V320 Natural Wood",
                    'Description of product'=>"This easy to play, classic, natural wood finished acoustic guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                    'Price'=>"699",
                    'Image link'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307513270181938/acoustic_guitar_dept.png"
                ],            
                [
                    'Product name'=>"Solar Bass 4392 Glossy Black",
                    'Description of product'=>"This easy to play, classic, sleak black bass guiatr with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                    'Price'=>"599",
                    'Image link'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514423615498/bass_dept.png"
                ],
        ]);
    }
}