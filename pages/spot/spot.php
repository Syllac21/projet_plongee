<?php
session_start();
require_once(__DIR__.'../../../assets/php/middleware/db_connect.php');
require_once(__DIR__.'../../../assets/php/controllers/variables.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spot de plongée</title>
    <link rel="stylesheet" href="/build/output.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        #map {
            height: 500px; /*hauteur de la carte*/
            width: 800px;
        }
    </style>
</head>
<body>
    <?php require_once(dirname(__DIR__,2).'./assets/php/components/header.php' ); ?>
    <h1 class="text-2xl text-center mb-10">Carte des spots de plongées</h1>
    <div id="map" class="bg-gray-200 mx-auto"> <!-- div de la map -->
        <script>
            var map = L.map('map').setView([42.476496, 3.120023], 14); // centre de la carte d'origine

            // tuile definissant l'affichage de la carte
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
            
                // marqueurs
                var marker = L.marker([	42.47580468782499, 3.1583838445158774]).addTo(map);
                marker.bindPopup("<h1> Plage du troc </h1><p>longitude : 3.158</p><p> latitude : 42.475</p>");

        </script>
    </div> 
    
</body>
</html>