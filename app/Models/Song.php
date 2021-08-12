<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'length',
        'sourcePath',
        'path'
    ];

    protected $dates = ['deleted_at'];

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre', 'song_genre_mapping');
    }

    public function instruments()
    {
        return $this->belongsToMany('App\Models\Instrument', 'song_instrument_mapping');
    }

    public function energyLevels()
    {
        return $this->belongsToMany('App\Models\EnergyLevel', 'song_energy_level_mapping');
    }

    public function moods()
    {
        return $this->belongsToMany('App\Models\Mood', 'song_mood_mapping');
    }
}
