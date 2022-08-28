<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'table_artist';
    protected $primarykey = 'id_artist';
    protected $fillable = ['name_country', 'pf_artist'];
}
