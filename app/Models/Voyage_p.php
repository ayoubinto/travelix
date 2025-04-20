<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voyage_p extends Model
{
    protected $table = 'voyage_p'; // Si le nom de ta table n'est pas "passengers"
    protected $primaryKey = 'id_voyagep'; // Si ta clé primaire est autre que "id"
    public $timestamps = true;
    protected $fillable = [
        'ville_depart',
        'ville_arrivee',
        'date_depart',
        'date_arrivee',
        'heure_depart',
        'heure_arrivee',
        'duree',
        'nom_aeroport',
        'prix',
        'type_voyagep'
    ];
}
