<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name', 'city', 'iata', 'icao','tz' // Add all fields you need
    ];
    
    // public static function getLimitedAirportNames(int $limit = 80)
    // {
    //     return self::query()
    //         ->select('id', 'country')
    //         ->distinct()    // Garantit l'unicité des paires id/name
    //         ->orderBy('country')
    //         ->limit($limit)
    //         ->pluck('country', 'id');// Retourne un tableau ["CDG", "JFK", ...]
    // } 
}
