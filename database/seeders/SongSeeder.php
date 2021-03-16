<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_n = storage_path('/app/songs.csv');
        $file = fopen($file_n, "r");

        $i = 1;
        while ( ($data = fgetcsv($file, 1000, ",")) !==FALSE )
        {
            if($i != 1){
                DB::table('songs')->insert(
                    [
                        'recordId' => $data[0],
                        'name' => $data[1],
                        'length' => $data[2],
                        'sourcePath' => null,
                        'path' => null,
                    ]
                );
            }

            $i++;
        }
        fclose($file);
    }
}
