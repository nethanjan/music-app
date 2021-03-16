<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongMoodMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'mood_id'
    ];
}
