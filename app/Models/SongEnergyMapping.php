<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongEnergyMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'energy_level_id'
    ];
}
