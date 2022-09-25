<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Album;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'table_artist';
    //protected $primarykey = 'id_artist';
    protected $fillable = [
        'name_artist',
        'pf_artist',
        'id_category',
        'id_country'
    ];

    public function artist_category()
    {
        return $this->belongsTo(Category::class);
    }
    public function artist_album()
    {
        //return $this->hasMany(Album::class, 'id_artist');
        return $this->hasOne(Album::class, 'id_artist', 'id');
    }

    public function artist_track()
    {
        //return $this->hasMany(Track::class, 'id_artist');
        return $this->hasOne(Track::class, 'id_artist', 'id');
    }
    public function follower_artist()
    {
        //return $this->hasMany(Follower::class, 'id');
        return $this->hasOne(Follower::class, 'id_artist', 'id');
    }
}
