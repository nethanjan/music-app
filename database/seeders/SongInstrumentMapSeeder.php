<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongInstrumentMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_n = storage_path('/app/songmappings.csv');
        $file = fopen($file_n, "r");
        $array = array();
        $i = 1;

        $instruments = array(
            '1' => array(
                'Drone'
            ),
            '2' => array(
                'Synth',
                'Theremin'
            ),
            '3' => array(
                'Acoustic Guitar',
                'Banjo',
                'Bass',
                'Ebow',
                'Electric Guitar',
                'Guitar Harmonics',
                'Mandolin',
                'Slide Guitar',
                'Solo Guitar',
                'Spanish Guitar',
                'Nylon Guitar',
                'Tremolo Guitar',
                'Ukulele',
                'Wah Wah'
            ),
            '4' => array(
                'Brass',
                'Horns',
                'Trumpet',
                'Tuba'
            ),
            '5' => array(
                'Bongos',
                'Bowls',
                'Brushed Drums',
                'Castanets',
                'Celeste',
                'Chimes',
                'Claves',
                'Cowbell',
                'Cymbals',
                'Djembe',
                'Drums',
                'Electrionic Drums',
                'Electronic Percussion',
                'Glockenspiel',
                'Güiro',
                'Hand Claps',
                'Marimba',
                'Metals',
                'Percussion',
                'Real Drums',
                'Rototoms',
                'Shaker',
                'Snaps',
                'Snare',
                'Sticks',
                'Steel Drums',
                'Tambourine',
                'Timpani',
                'Triangle',
                'Tubular Bells',
                'Vibraphone',
                'War Drums',
                'Xylophone'
            ),
            '6' => array(
                'Accordion',
                'Keys',
                'Organ',
                'Piano'
            ),
            '7' => array(
                'Cello',
                'Chamber',
                'Dulcimer',
                'Harp',
                'Harpsicord',
                'Pizzicato Strings',
                'Quartet',
                'Solo Violin',
                'Solo Cello',
                'Strings',
                'Tremolo Strings',
                'Viola',
                'Violin',
                'Walking Bass',
                'Fretless Bass'
            ),
            '8' => array(
                'Aaahs',
                'Background Vocals',
                'Choir',
                'Female Vocals',
                'French Vocals',
                'Lyrics',
                'Male Vocals',
                'Ooohs',
                'Vocalese',
                'Whistling'
            ),
            '9' => array(
                'Bassoon',
                'Clarinet',
                'Flute',
                'Harmonica',
                'Kazoo',
                'Oboe',
                'Piccolo',
                'Saxophone',
                'Woodwinds'
            ),
            '10' => array(
                'Bagpipes',
                'Didgeridoo',
                'Ethnic Percussion',
                'Ethnic Strings',
                'Koto',
                'Latin percussion',
                'Sitar',
                'Tabla'
            ),
            '11' => array(
                'Delay FX',
                'Reverse FX',
                'Swells',
                'Trills'
            )
        );

        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {
            $results = [];
            if($i != 1){
                $record_id = $data[0];
                $song = DB::table('songs')->where('recordId', $record_id)->first();
                if($song){
                    $instruments_for_record = explode(",", $data[2]);
                    foreach ($instruments_for_record as $song_instrument) 
                    {
                        foreach ($instruments as $main_instrument => $sub_instruments)
                        {
                            if (in_array(trim($song_instrument), $sub_instruments)) 
                            {
                                array_push($results, $main_instrument);
                            }
                        }
                    }
                    $unique_results = array_unique($results);
                    foreach ($unique_results as $res) {
                        DB::table('song_instrument_mapping')->insert([
                            [
                                'song_id' => $song->id,
                                'instrument_id' => $res,
                                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                            ]
                        ]);
                    }
                }
            }

            $i++;
        }
        fclose($file);
    }
}
