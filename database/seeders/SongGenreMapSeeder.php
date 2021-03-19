<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongGenreMapSeeder extends Seeder
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

        $genre = array(
            '1' => array(
                '20s',
                'Oldies'
            ),
            '2' => array(
                '30s',
                'Oldies'
            ),
            '3' => array(
                '40s',
                'Oldies'
            ),
            '4' => array(
                '50s',
                'Oldies'
            ),
            '5' => array(
                '60s',
                'Oldies'
            ),
            '6' => array(
                '70s',
                'Oldies'
            ),
            '7' => array(
                '80s'
            ),
            '8' => array(
                'Ambient',
                'Soundscape'
            ),
            '9' => array(
                'Americana',
                'Country'
            ),
            '10' => array(
                'Cinematic',
                'Trailer',
                'Western',
                'Spaghetti Western'
            ),
            '11' => array(
                'Dance',
                'EDM',
                'Electronic'
            ),
            '12' => array(
                'Middle Eastern',
                'New Age',
                'Ethnic',
                'World',
                'French',
                'Polka',
                'Reggae'
            ),
            '13' => array(
                'Country',
                'Folk'
            ),
            '14' => array(
                'Dance',
                'Funk',
                'Funky',
                'Soul'
            ),
            '15' => array(
                'Low Fi',
                'Hip Hop',
                'R&B'
            ),
            '16' => array(
                'Christmas',
                'Holiday'
            ),
            '17' => array(
                'Jazz'
            ),
            '18' => array(
                'Bossa Nova',
                'Latin'
            ),
            '19' => array(
                'Lounge',
                'Elevator Music',
                'Muzac'
            ),
            '20' => array(
                'Lullaby'
            ),
            '21' => array(
                'Mnemonic'
            ),
            '22' => array(
                'Circus',
                'Classical',
                'Orchestral'
            ),
            '23' => array(
                'Dance',
                'Pop',
                'Remix'
            ),
            '24' => array(
                'Indie',
                'Metal',
                'Alternative',
                'Classic Rock',
                'Surf Rock',
                'Rock'
            ),
            '20' => array(
                'Motown'
            )
        );

        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {
            $results = [];
            if($i != 1){
                $record_id = $data[0];
                $song = DB::table('songs')->where('recordId', $record_id)->first();
                if($song){
                    $genre_for_record = explode(",", $data[1]);

                    foreach ($genre_for_record as $song_genre) 
                    {
                        foreach ($genre as $main_genre => $sub_genre)
                        {
                            if (in_array(trim($song_genre), $sub_genre)) 
                            {
                                array_push($results, $main_genre);
                            }
                        }
                    }
                    $unique_results = array_unique($results);
                    foreach ($unique_results as $res) {
                        DB::table('song_genre_mapping')->insert([
                            [
                                'song_id' => $song->id,
                                'genre_id' => $res,
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
