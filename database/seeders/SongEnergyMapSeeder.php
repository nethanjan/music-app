<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SongEnergyMapSeeder extends Seeder
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

        $energy = array(
            '1' => array(
                'Ambient',
                'Down-Tempo',
                'Grooving',
                'Laid Back',
                'Mellow',
                'Peaceful',
                'Slow',
                'Soft',
                'Warm'
            ),
            '2' => array(
                'Bouncy',
                'Building',
                'Carefree',
                'Upbeat',
                'Uplifting'
            ),
            '3' => array(
                'Aggressive',
                'Driving',
                'Energetic',
                'Energy',
                'Fast',
                'Intense',
                'Lively',
                'Party'
            )
        );

        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {
            $results = [];
            if($i != 1){
                $record_id = $data[0];
                $song = DB::table('songs')->where('recordId', $record_id)->first();
                if($song){
                    $energy_for_record = explode(",", $data[1]);
                    foreach ($energy_for_record as $song_energy) 
                    {
                        foreach ($energy as $main_energy => $sub_energy)
                        {
                            
                            if (in_array(trim($song_energy), $sub_energy)) 
                            {
                                array_push($results, $main_energy);
                            }
                        }
                    }
                    // echo $record_id;
                    $unique_results = array_unique($results);

                    foreach ($unique_results as $res) {
                        DB::table('song_energy_level_mapping')->insert([
                            [
                                'song_id' => $song->id,
                                'energy_level_id' => $res,
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
