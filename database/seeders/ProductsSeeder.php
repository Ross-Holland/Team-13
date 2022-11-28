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
                'Instrument Type'=>"Electric_Guitar",
                'Name'=>"Bender Electric Stratocaster V3 Black",
                'Description'=>"This easy to play, classic, sleak black Stratocaster is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"399",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307515405082634/electric_guitar_dept.png"
            ],
            [
                'Instrument Type'=>"Acoustic_Guitar",
                'Name'=>"Ace Acoustic V320 Natural Wood",
                'Description'=>"This easy to play, classic, natural wood finished acoustic guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Natural",
                'Price'=>"699",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307513270181938/acoustic_guitar_dept.png"
            ],            
            [
                'Instrument Type'=>"Bass_Guitar",
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
                'Instrument Type'=>"Drum",
                'Name'=>"Rolando V948 Acoustic Drum Kit",
                'Description'=>"This full sized acoustic drum kit is tailored to let you unleash the beast with its hard wearing materials and rock solid foundations.",
                'Colour'=>"Black",
                'Price'=>"899",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307515048570930/drums_dept.png"
            ],
            [
                'Instrument Type'=>"Electric_Guitar",
                'Name'=>"Gibdaughter Electric V3 Black and Gold",
                'Description'=>"This elegant, classic, sleak black with gold detailing Gibdaughter is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"1800",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350486351548466/21_1.png"
            ],       
            [
                'Instrument Type'=>"Bass_Guitar",
                'Name'=>"Solar Bass 665 Black Sunburst",
                'Description'=>"This easy to play, classic, sunburst black bass guitar with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Sunburst",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514067103754/dark_bass_4__1.png"
            ],    
            [
                'Instrument Type'=>"Drum",
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
                'Instrument Type'=>"Acoustic_Guitar",
                'Name'=>"Ace Acoustic B311 Black",
                'Description'=>"This easy to play, classic, black acoustic guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"699",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497877512232/9_1.png"
            ],
            [
                'Instrument Type'=>"Bass_Guitar",
                'Name'=>"Solar Bass 887 Blue",
                'Description'=>"This easy to play, classic, blue bass guitar with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Blue",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307513660248165/blue_bass_4__1_.png"
            ],  
            [
                'Instrument Type'=>"Electric_Guitar",
                'Name'=>"Gibdaughter Electric V2 Black Sunburst",
                'Description'=>"This elegant, classic, sleak black sunburst Gibdaughter is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Sunburst",
                'Price'=>"1800",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307516789198878/sunburst_electric_guitar_1__1.png"
            ],   
            [
                'Instrument Type'=>"Electric_Guitar",
                'Name'=>"Gibdaughter Electric V6 White",
                'Description'=>"This elegant, classic, sleak white Gibdaughter is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"White",
                'Price'=>"1800",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307517112168469/white_electric_guitar_1__1.png"
            ],   
            [
                'Instrument Type'=>"Electric_Guitar",
                'Name'=>"Gibdaughter Electric V1 Black/White",
                'Description'=>"This elegant, classic, sleak white/black Gibdaughter is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black/White",
                'Price'=>"1800",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350495834886144/black_22_1.png"
            ],   
            [
                'Instrument Type'=>"Electric_Guitar",
                'Name'=>"Gibdaughter Electric V10 Blue Wave",
                'Description'=>"This elegant, classic, sleak Gibdaughter with a blue to white wave glossy effect is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Blue Wave",
                'Price'=>"1900",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496115900528/22_1.png"
            ],
            [
                'Instrument Type'=>"Acoustic_Guitar",
                'Name'=>"Bender V35 Classic",
                'Description'=>"This easy to play, classic guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Natural",
                'Price'=>"450",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496745050142/10_1.png"
            ],
            [
                'Instrument Type'=>"Bass_Guitar",
                'Name'=>"Solar Bass 635 Light Blue",
                'Description'=>"This easy to play, classic, light blue bass guitar with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Blue",
                'Price'=>"699",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497038647426/23_1.png"
            ], 
            [
                'Instrument Type'=>"Amp",
                'Name'=>"Blackstar Tonemaster v3",
                'Description'=>"One of the most versatile and crisp sounding amps out there today, made with you and your music in mind, without the big price tag.",
                'Colour'=>"Black",
                'Price'=>"99",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497353207838/13_1.png"
            ],  
            [
                'Instrument Type'=>"Bass_Guitar",
                'Name'=>"Solar Bass 223 Black",
                'Description'=>"This easy to play, classic, black bass guitar with a glossy finish is perfect for bass enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"499",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498179498085/black_23_1.png"
            ], 
            [
                'Instrument Type'=>"Acoustic_Guitar",
                'Name'=>"Ace V21 Dark Wood",
                'Description'=>"This easy to play, classic, dark wood finished guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Dark Brown",
                'Price'=>"450",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496635994162/dark_acoustic_guitar_3__1_.png"
            ],
            [
                'Instrument Type'=>"Keyboard",
                'Name'=>"Yodele A432 Black Keyboard",
                'Description'=>"This authentic, sleek, black keyboard is perfect for piano enthusiasts or professional players without the heavy price tag. It's authentic sound is guaranteed to capture your audience, no matter how intimate or crowded.",
                'Colour'=>"Black",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497663590513/16_1.png"
            ],  
            [
                'Instrument Type'=>"Drum",
                'Name'=>"Rolando V778 Digital Drum Kit",
                'Description'=>"This advanced, digital drum kit is tailored to let you unleash the beast without getting a noise complaint, perfect to preactice at home.",
                'Colour'=>"Black",
                'Price'=>"1099",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496417878077/18_1.png"
            ], 
            [
                'Instrument Type'=>"Acoustic_Guitar",
                'Name'=>"Ace V11 Natural Wood",
                'Description'=>"This easy to play, classic, natural wood finished guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Natural",
                'Price'=>"499",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498779275366/11_1.png"
            ],
            [
                'Instrument Type'=>"Keyboard",
                'Name'=>"Yodele A432 White Keyboard",
                'Description'=>"This authentic, sleek, white keyboard is perfect for piano enthusiasts or professional players without the heavy price tag. It's authentic sound is guaranteed to capture your audience, no matter how intimate or crowded.",
                'Colour'=>"White",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350499106426940/17_1.png"
            ], 
            [
                'Instrument Type'=>"Acoustic_Guitar",
                'Name'=>"Ace V75 Natural Sunburst",
                'Description'=>"This easy to play, classic, natural sunburst finished guitar is perfect for guitar enthusiasts or professional shedders. It's iconic design is guaranteed to catch your audience's eye no matter how intimate or crowded.",
                'Colour'=>"Natural Sunburst",
                'Price'=>"599",
                'Image'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350499492315277/12_1.png"
            ],
        ]);
    }
}
