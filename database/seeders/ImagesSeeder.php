<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('images')->insert([
            [
                'productsid'=>"1",
                'Name'=>"Bender Electric Stratocaster V3 Black",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387185550622800/black_electric_guitar_1_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046421802215288924/black_electric_guitar_1_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046421802215288924/black_electric_guitar_1_2.jpg"
            ],
            [
                'productsid'=>"2",
                'Name'=>"Ace Acoustic V320 Natural Wood",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387186020393022/light_acoustic_guitar_2_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387186280431696/light_acoustic_guitar_2_3.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387185768730664/light_acoustic_guitar_2_2.jpg"
            ],
            [
                'productsid'=>"3",
                'Name'=>"Solar Bass 4392 Glossy Black",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387186553065584/black_bass_4_1.jpg",
                'Image2'=>"",
                'Image3'=>""
            ],
            [
                'productsid'=>"4",
                'Name'=>"Yodele AW230 Black Keyboard",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498435350608/14_1.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388034020581386/keyboard_7_2.jpg",
                'Image3'=>""
            ],
            [
                'productsid'=>"5",
                'Name'=>"Bender Tonemaster 300 Combo",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514721407016/amp_dept.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388033743749172/fender_amp_5_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388033525657600/fender_amp_5_3.jpg"
            ],
            [
                'productsid'=>"6",
                'Name'=>"Rolando V948 Acoustic Drum Kit",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307515048570930/drums_dept.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388032368029706/drums_8_2.jpg",
                'Image3'=>""
            ],
            [
                'productsid'=>"7",
                'Name'=>"Gibdaughter Electric V3 Black and Gold",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387694969819197/21_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387695208890420/21_2.jpg",
                'Image3'=>""
            ],
            [
                'productsid'=>"8",
                'Name'=>"Solar Bass 665 Black Sunburst",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514067103754/dark_bass_4__1.png",
                'Image2'=>"",
                'Image3'=>""
            ],
            [
                'productsid'=>"9",
                'Name'=>"Rolando v223 Digital Drum Kit",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498070433892/20_1.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387848334549042/ydigi_drum_20_2.jpg",
                'Image3'=>""
            ],
            [
                'productsid'=>"10",
                'Name'=>"Yodele AW549 Red Keyboard",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496979918868/15_1.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046423453785411584/red_piano_2.jpg",
                'Image3'=>""
            ],
            [
                'productsid'=>"11",
                'Name'=>"MarKos Tonemaster 300 Combo",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045335338069012520/marshall_amp_6__1.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388032875540512/marshall_amp_6_3.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388033097826325/marshall_amp_6_2.jpg"
            ],
            [
                'productsid'=>"12",
                'Name'=>"Ace Acoustic B311 Black",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497877512232/9_1.png",
                'Image2'=>"",
                'Image3'=>""
            ],




        ]);
    }
}
