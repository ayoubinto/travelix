<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vols</title>
</head>
<body>
    <h1>Liste des Vols</h1>
    <table>
    <thead>
        <tr>
            <th>Numéro de vol</th>
            <th>Date</th>
            <th>Statut</th>
            <th>Aéroport de départ</th>
            <th>Heure de départ</th>
            <th>Aéroport d'arrivée</th>
            <th>Heure d'arrivée</th>
            <th>Compagnie</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($flights as $flight)
            <tr>
                <td>{{ $flight['flight']['number'] ?? 'Inconnu' }}</td>
                <td>{{ $flight['flight_date'] ?? 'Inconnu' }}</td>
                <td>{{ $flight['flight_status'] ?? 'Inconnu' }}</td>
                <td>{{ extractCity($flight['departure_airport'] ?? '') }}</td>
                <td>{{ $flight['departure']['scheduled'] 
                        ? \Carbon\Carbon::parse($flight['departure']['scheduled'])->format('Y-m-d H:i') 
                        : 'Non défini' }}</td>
                <td>{{ $flight['arrival']['airport'] ?? 'Inconnu' }}</td>
                <td>{{ $flight['arrival']['scheduled'] 
                        ? \Carbon\Carbon::parse($flight['arrival']['scheduled'])->format('Y-m-d H:i') 
                        : 'Non défini' }}</td>
                <td>{{ $flight['airline']['name'] ?? 'Inconnue' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>