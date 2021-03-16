<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongMoodMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_mood_mapping', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->references('id')->on('songs');
            $table->foreignId('mood_id')->references('id')->on('moods');
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
        Schema::dropIfExists('song_mood_mapping');
    }
}
