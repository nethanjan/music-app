<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongEnergyMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_energy_level_mapping', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->references('id')->on('songs');
            $table->foreignId('energy_level_id')->references('id')->on('energy_levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_energy_level_mapping');
    }
}
