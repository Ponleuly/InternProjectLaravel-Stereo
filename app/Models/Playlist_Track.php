<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist_Track extends Model
{
    use HasFactory;
    protected $table = 'table_playlist_track';
    protected $fillable = [
        'id_playlist',
        'id_track',
    ];
    public function playlist_track()
    {
        return $this->belongsTo(Track::class, 'id_track');
    }
}
