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
    protected $fillable = ['name_artist', 'pf_artist', 'id_category', 'id_country'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function album()
    {
        return $this->hasMany(Album::class);
    }
}