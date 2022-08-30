<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'table_country';
    //protected $primarykey = 'id_country';
    protected $fillable = ['name_country'];
}
