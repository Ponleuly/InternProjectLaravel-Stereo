<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liked extends Model
{
    use HasFactory;
    protected $table = 'table_liked';
    protected $fillable = [
        'id_user',
        'id_track',
    ];
    public function liked_track()
    {
        return $this->belongsTo(Track::class, 'id_track');
    }
}
