<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable  
{
    protected $table = 'admin'; // Si le nom de ta table n'est pas "passengers"
    protected $primaryKey = 'id'; // Si ta clé primaire est autre que "id"
    public $timestamps = true;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
