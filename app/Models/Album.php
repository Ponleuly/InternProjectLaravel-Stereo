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
    protected $primarykey = 'id_album';
    protected $fillable = ['name_album', 'pf_album', 'id_category', 'id_country', 'id_artist'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
