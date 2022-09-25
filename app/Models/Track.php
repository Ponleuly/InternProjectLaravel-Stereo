<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $table = 'table_track';
    protected $fillable = [
        'name_track',
        'pf_track',
        'audio_track',
        'id_artist',
        'id_category',
        'id_country',
        'id_album',
    ];
    public function artist_track()
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }
    public function album_track()
    {
        return $this->belongsTo(Album::class, 'id_album');
    }
    public function playlist_track()
    {
        //return $this->hasMany(Playlist_Track::class, 'id');
        return $this->hasOne(Playlist_Track::class, 'id_track', 'id');
    }
    public function liked_track()
    {
        //return $this->hasMany(Liked::class, 'id');
        return $this->hasOne(Liked::class, 'id_track', 'id');
    }
}
