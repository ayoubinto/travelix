<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Airport;
use Illuminate\Support\Facades\Storage; 

class ImportAirports extends Command
{
    protected $signature = 'import:airports';
    protected $description = 'Importer les aéroports depuis le fichier CSV';

    public function handle()
    {
        $path = storage_path('app/airports.csv');
    
        if (!file_exists($path)) {
            $this->error("Fichier airports.csv non trouvé !");
            return;
        }
    
        $handle = fopen($path, 'r');
    
        while (($line = fgetcsv($handle)) !== false) {
            // Vérifier que la ligne contient au moins 15 colonnes
            if (count($line) < 15) {
                continue; // on saute la ligne
            }
    
            Airport::create([
                'name'         => $line[1],
                'city'         => $line[2],
                'country'      => $line[3],
                'iata'         => $line[4],
                'icao'         => $line[5],
                'latitude'     => $line[6],
                'longitude'    => $line[7],
                'altitude'     => $line[8],
                'timezone'     => $line[11],
                'dst'          => $line[10],
                'tz_database'  => $line[11],
                'type'         => $line[13],
                'source'       => $line[14],
            ]);
        }
    
        fclose($handle);
    
        $this->info('Importation terminée avec succès ✅');
    }
}
