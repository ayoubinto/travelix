<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Passenger extends Authenticatable  
{
    protected $table = 'passenger'; // Si le nom de ta table n'est pas "passengers"
    protected $primaryKey = 'id_passeng'; // Si ta clé primaire est autre que "id"
    public $timestamps = true;
    protected $fillable = [
        'nom_passeng',
        'prenom_passeng',
        'nation_passeng',
        'age_passeng',
        'email_passeng',
        'phone_passeng',
        'postal_code',
        'passport_number',
        'password'
    ];
    protected $hidden = [
        'password',
    ];
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_passeng');
    }
    public function getAuthIdentifierName()
    {
        return 'email_passeng';
    }
}
