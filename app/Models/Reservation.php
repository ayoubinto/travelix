<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    // Indiquer les colonnes qui peuvent être assignées massivement
    protected $table = 'reservation';
    protected $primaryKey = 'id_reservation';
    public $timestamps = false;
    protected $fillable = [
        'id_passeng',     // Ajoute id_passeng ici
        'id_voyagep',
        'nombre_adultes',
        'nombre_enfants',
        'date_reservation',
    ];
    public function passenger()
    {
        return $this->belongsTo(Passenger::class, 'id_passeng');
    }
    public function voyage()
    {
        return $this->belongsTo(Voyage_p::class, 'id_voyagep'); // 'id_voyagep' est la clé étrangère
    }
}
