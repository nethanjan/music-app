<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongGenreMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'genre_id'
    ];
}
}
