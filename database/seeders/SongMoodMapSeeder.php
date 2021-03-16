<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongMoodMapSeeder extends Seeder
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

        $moods = array(
            '1' => array(
                'Anthemic',
                'Sports',
                'Triumphant'
            ),
            '2' => array(
                'Ambiguous',
                'Atmospheric',
                'Drone',
                'Meditative',
                'Tonal'
            ),
            '3' => array(
                'Beautiful',
                'Expansive',
                'Granola',
                'Melodic',
                'Organic',
                'Pretty',
                'Quartet'
            ),
            '4' => array(
                'Building'
            ),
            '5' => array(
                'Catchy',
                'Confident',
                'Cool',
                'Funky',
                'Retro',
                'Urban'
            ),
            '6' => array(
                'Dramatic',
                'Brooding',
                'Dark',
                'Dissonant',
                'Epic',
                'Huge',
                'Moody',
                'Ominous',
                'Over the Top',
                'Serious'
            ),
            '7' => array(
                'Adventurous',
                'Percussive',
                'Tribal'
            ),
            '8' => array(
                'Attitude',
                'Badass',
                'Ballsy',
                'Bold',
                'Edgy',
                'Grunge',
                'Hard',
                'Menacing',
                'Tough'
            ),
            '9' => array(
                'Contemplative',
                'Emotional',
                'Human',
                'Reflective',
                'Sad',
                'Somber'
            ),
            '10' => array(
                'Heroic',
                'Olympics'
            ),
            '11' => array(
                'Down Home',
                'Educational',
                'Sleepy'
            ),
            '12' => array(
                'Deamlike',
                'Magical',
                'Waltz'
            ),
            '13' => array(
                'Solo',
                'Sparse',
                'Technical',
                'Understated'
            ),
            '14' => array(
                'Anticipation',
                'Mysterious',
                'Tension'
            ),
            '15' => array(
                'Happy',
                'Joyful',
                'Hopeful',
                'Inspirational',
                'Determined',
                'Motivational',
                'Noble',
                'Patriotic',
                'Positive',
                'Upbeat'
            ),
            '16' => array(
                'Comedic',
                'Cute',
                'Fanfare',
                'Festive',
                'Fun',
                'Parade',
                'Youthful'
            ),
            '17' => array(
                'Cartoon',
                'Cheesy',
                'Funny',
                'Montage',
                'Odd',
                'Quirky',
                'Tongue in Cheek'
            ),
            '18' => array(
                'Feminine',
                'Masculine',
                'Romantic',
                'Sexy'
            ),
            '19' => array(
                'Cocky',
                'Swagger'
            ),
            '20' => array(
                'AM Radio',
                'Free Form',
                'Jam',
                'Strange',
                'Unexpected'
            )
        );

        $i = 1;
        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {

            $results = [];
            if($i != 1){
                $record_id = $data[0];
                $song = DB::table('songs')->where('recordId', $record_id)->first();
                if($song){
                    $mood_for_record = explode(",", $data[1]);
                    foreach ($mood_for_record as $song_mood) 
                    {
                        foreach ($moods as $main_mood => $sub_moods)
                        {
                            if (in_array(trim($song_mood), $sub_moods)) 
                            {
                                    array_push($results, $main_mood);
                            }
                        }
                    }
                    $unique_results = array_unique($results);
                    foreach ($unique_results as $res) 
                    {
                        DB::table('song_mood_mapping')->insert([
                            [
                                'song_id' => $song->id,
                                'mood_id' => $res,
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
