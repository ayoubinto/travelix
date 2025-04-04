<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table = 'villes'; // 👈 correspond exactement au nom de la table MySQL
    public $timestamps = true;
}
