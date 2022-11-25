<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'Instrument Type'=>"Electric Guitar",
                'Name'=>"Bender Electric Stratocaster V3 Black",
                'Description'=>"This easy to play, classic, sleak black Stratocaster is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"399",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307515405082634/electric_guitar_dept.png"
            ],
            [
                'Instrument Type'=>"Acoustic Guitar",
                'Name'=>"Ace Acoustic V320 Natural Wood",
                'Description'=>"This easy to play, classic, natural wood finished acoustic guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Natural",
                'Price'=>"699",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307513270181938/acoustic_guitar_dept.png"
            ],            
            [
                'Instrument Type'=>"Bass Guitar",
                'Name'=>"Solar Bass 4392 Glossy Black",
                'Description'=>"This easy to play, classic, sleak black bass guiatr with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514423615498/bass_dept.png"
            ],            
            [
                'Instrument Type'=>"Keyboard",
                'Name'=>"Yodele AW230 Black Keyboard",
                'Description'=>"This authentic, classic, sleak black keyboard is perfect for piano enthusiasts or professional players without the heavy price tag. It's authentic sound is guaranteed to capture your audience, no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"499",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498435350608/14_1.png"
            ],            
            [
                'Instrument Type'=>"Amp",
                'Name'=>"Bender Tonemaster 300 Combo",
                'Description'=>"One of the most versatile and crisp sounding amps out there today, made with you and your music in mind.",
                'Colour'=>"Black",
                'Price'=>"299",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514721407016/amp_dept.png"
            ],            
            [
                'Instrument Type'=>"Drums",
                'Name'=>"Rolando V948 Acoustic Drum Kit",
                'Description'=>"This full sized acoustic drum kit is tailored to let you unleash the beast with its hard wearing materials and rock solid foundations.",
                'Colour'=>"Black",
                'Price'=>"899",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307515048570930/drums_dept.png"
            ],
            [
                'Instrument Type'=>"Electric Guitar",
                'Name'=>"Gibdaughter Electric V3 Black and Gold",
                'Description'=>"This elegant, classic, sleak black with gold detailing Gibdaughter is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"1800",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350486351548466/21_1.png"
            ],       
            [
                'Instrument Type'=>"Bass Guitar",
                'Name'=>"Solar Bass 665 Black Sunburst",
                'Description'=>"This easy to play, classic, sunburst black bass guiatr with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Sunburst",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514067103754/dark_bass_4__1.png"
            ],    
            [
                'Instrument Type'=>"Drums",
                'Name'=>"Rolando v223 Digital Drum Kit",
                'Description'=>"This advanced, digital drum kit is tailored to let you unleash the beast without getting a noise complaint, perfect to preactice at home.",
                'Colour'=>"Black",
                'Price'=>"999",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498070433892/20_1.png"
            ],        
            [
                'Instrument Type'=>"Keyboard",
                'Name'=>"Yodele AW549 Red Keyboard",
                'Description'=>"This authentic, vibrant, red keyboard is perfect for piano enthusiasts or professional players without the heavy price tag. It's authentic sound is guaranteed to capture your audience, no matter how intimate or crowded.",
                'Colour'=>"Red",
                'Price'=>"699",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496979918868/15_1.png"
            ],            
            [
                'Instrument Type'=>"Amp",
                'Name'=>"MarKos Tonemaster 300 Combo",
                'Description'=>"One of the most versatile and crisp sounding amps out there today, made with you and your music in mind, without the big price tag.",
                'Colour'=>"Black",
                'Price'=>"199",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045335338069012520/marshall_amp_6__1.png"
            ],            
            [
                'Instrument Type'=>"Acoustic Guitar",
                'Name'=>"Ace Acoustic B311 Black",
                'Description'=>"This easy to play, classic, black acoustic guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"699",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497877512232/9_1.png"
            ]

        ]);
    }
}
