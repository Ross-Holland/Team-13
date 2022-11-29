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
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046422071728668702/black_electric_guitar_1_3.jpg"
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
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047103967559155712/black_bass_guitar_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047104480702906398/black_bass_guitar_3.jpg"
            ],
            [
                'productsid'=>"4",
                'Name'=>"Yodele AW230 Black Keyboard",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387920111685672/yamaha_piano_14_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388034020581386/keyboard_7_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498435350608/14_1.png"
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
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388032036675594/drums_8_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046388032368029706/drums_8_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046898754986451004/drums_8_3.jpg"
            ],
            [
                'productsid'=>"7",
                'Name'=>"Gibdaughter Electric V3 Black and Gold",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387694969819197/21_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387695208890420/21_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047106336678215700/21_1.jpg"
            ],
            [
                'productsid'=>"8",
                'Name'=>"Solar Bass 665 Black Sunburst",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047110178723614770/unknown.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307514067103754/dark_bass_4__1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047112438916599869/13100717285058f.jpg"
            ],
            [
                'productsid'=>"9",
                'Name'=>"Rolando v223 Digital Drum Kit",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046898754210504714/ydigi_drum_20_3.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387848334549042/ydigi_drum_20_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047106998979801169/ydigi_drum_20_2.jpg"
            ],
            [
                'productsid'=>"10",
                'Name'=>"Yodele AW549 Red Keyboard",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387922053627904/red_piano_15_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046423453785411584/red_piano_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047107678054395915/red_piano_15_1.jpg"
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
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046898754646724708/black_acoustic_9_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046898754428616885/black_acoustic_9_3.jpg"
            ],
            [
                'productsid'=>"13",
                'Name'=>"Solar Bass 887 Blue",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047110708686491698/unknown.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307513660248165/blue_bass_4__1_.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047112438916599869/13100717285058f.jpg"
            ],  
            [
                'productsid'=>"14",
                'Name'=>"Gibdaughter Electric V2 Black Sunburst",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047111208244875364/unknown.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307516789198878/sunburst_electric_guitar_1__1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047111962766622771/180430326805008f.jpg"
            ],   
            [
                'productsid'=>"15",
                'Name'=>"Gibdaughter Electric V6 White",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047111489875624017/unknown.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045307517112168469/white_electric_guitar_1__1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047111962766622771/180430326805008f.jpg"
            ],   
            [
                'productsid'=>"16",
                'Name'=>"Gibdaughter Electric V1 Black/White",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387754860302406/black_22_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387754570874961/black_22_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387756579967006/black_22_3.jpg"
            ],   
            [
                'productsid'=>"17",
                'Name'=>"Gibdaughter Electric V10 Blue Wave",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387755875323954/22_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387755510403202/22_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387755145494588/22_3.jpg"
            ],
            [
                'productsid'=>"18",
                'Name'=>"Bender V35 Classic",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387694093213778/classical_acoustic_10_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387694550384771/classical_acoustic_10_3.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387694315507773/classical_acoustic_10_2.jpg"
            ],
            [
                'productsid'=>"19",
                'Name'=>"Solar Bass 635 Light Blue",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387756118573076/blue_23_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497038647426/23_1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047108792141238342/blue_23_1.jpg"
            ], 
            [
                'productsid'=>"20",
                'Name'=>"Blackstar Tonemaster v3",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497353207838/13_1.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387920753393695/black_amp_13_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387920363331604/black_amp_13_3.jpg"
            ],  
            [
                'productsid'=>"21",
                'Name'=>"Solar Bass 223 Black",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387756353458256/black_23_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350498179498085/black_23_1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047109228734730260/black_23_1.jpg"
            ], 
            [
                'productsid'=>"22",
                'Name'=>"Ace V21 Dark Wood",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387488278708284/190711346008008f.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387187802972170/dark_acoustic_guitar_3_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387187547115570/dark_acoustic_guitar_3_3.jpg"
            ],
            [
                'productsid'=>"23",
                'Name'=>"Yodele A432 Black Keyboard",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387921579692033/digital_piano_16_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047109772484288552/digital_piano_16_1.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350497663590513/16_1.png"
            ],  
            [
                'productsid'=>"24",
                'Name'=>"Rolando V778 Digital Drum Kit",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350496417878077/18_1.png",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387847399231508/digi_drum_18_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387846862340136/digi_drum_18_3.jpg"
            ], 
            [
                'productsid'=>"25",
                'Name'=>"Ace V11 Natural Wood",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387693292101642/wood_acoustic_11_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387693568921731/wood_acoustic_11_2.jpg",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387693879296061/wood_acoustic_11_3.jpg"
            ],
            [
                'productsid'=>"26",
                'Name'=>"Yodele A432 White Keyboard",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387921328013332/white_piano_17_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350499106426940/17_1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047149357805338716/white_piano_17_1.jpg"
            ], 
            [
                'productsid'=>"27",
                'Name'=>"Ace V75 Natural Sunburst",
                'Image1'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1046387694751719464/sunburst_acoustic_12_1.jpg",
                'Image2'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1045350499492315277/12_1.png",
                'Image3'=>"https://cdn.discordapp.com/attachments/1045063605030232114/1047150091221340270/sunburst_acoustic_12_1.jpg"
            ],
        ]);
    }
}
