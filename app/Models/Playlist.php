<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'table_playlist';
    protected $fillable = [
        'name_playlist',
        'pf_playlist',
        'id_user',
    ];
    public function artist_track()
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }
    public function album_track()
    {
        return $this->belongsTo(Album::class, 'id_album');
    }
    public function playlist_user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
