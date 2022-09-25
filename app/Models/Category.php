<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'table_category';
    protected $fillable = ['name_category'];
    public function artist_category()
    {
        //return $this->hasMany(Artist::class);
        return $this->hasOne(Artist::class, 'id_category', 'id');
    }
}
