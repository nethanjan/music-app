<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongGenreMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_genre_mapping', function (Blueprint $table) {
            $table->id();
            $table->foreignId('song_id')->references('id')->on('songs');
            $table->foreignId('genre_id')->references('id')->on('genres');
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
        Schema::dropIfExists('song_genre_mapping');
    }
}
