<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    protected $table = 'table_follower';
    protected $fillable = [
        'id_user',
        'id_artist',
    ];
    public function follower_artist()
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }
}
