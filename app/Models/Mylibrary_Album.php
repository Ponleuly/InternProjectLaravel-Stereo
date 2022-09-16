<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mylibrary_Album extends Model
{
    use HasFactory;
    protected $table = 'table_mylibrary_album';
    protected $fillable = [
        'id_user',
        'id_album',
    ];
    public function myalbum()
    {
        return $this->belongsTo(Album::class, 'id_album');
    }
}
