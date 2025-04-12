<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // Nom de l'aéroport
            $table->string('city');              // Ville de l'aéroport
            $table->string('country');           // Pays de l'aéroport
            $table->string('iata');              // Code IATA
            $table->string('icao');              // Code ICAO
            $table->decimal('latitude', 10, 6);  // Latitude
            $table->decimal('longitude', 10, 6); // Longitude
            $table->integer('altitude');         // Altitude
            $table->string('timezone');          // Fuseau horaire
            $table->string('dst');               // DST (Daylight Saving Time)
            $table->string('tz_database');       // Base de données du fuseau horaire
            $table->string('type');              // Type de l'aéroport
            $table->string('source');            // Source des données (ex: CSV)
            $table->timestamps();                // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
