<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Country;

class Album extends Model
{
    use HasFactory;
    protected $table = 'table_album';
    //protected $primarykey = 'id_album';
    protected $fillable = [
        'name_album',
        'pf_album',
        'id_artist',
        'id_category'
    ];

    public function artist_album()
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }

    public function album_track()
    {
        //return $this->haveMany(Track::class, 'id_album');
        return $this->haveOne(Track::class, 'id_album', 'id');
    }
    public function myalbum()
    {
        //return $this->hasMany(Mylibrary_Album::class, 'id');
        return $this->hasOne(Mylibrary_Album::class, 'id_album', 'id');
    }
}
