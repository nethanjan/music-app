<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongInstrumentMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_instrument_mapping', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->references('id')->on('songs');
            $table->foreignId('instrument_id')->references('id')->on('instruments');
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
        Schema::dropIfExists('song_instrument_mapping');
    }
}
