<?php
require_once(__DIR__.'../../middleware/db_connect.php');
require_once(__DIR__.'../../controllers/variables.php');
$postData=$_POST;

// validation des données

// town-name spot-name latitude longitude

if(
    trim(strip_tags($postData['town-name'])) === '' ||
    trim(strip_tags($postData['spot-name'])) === '' ||
    trim(strip_tags($postData['latitude'])) === '' ||
    trim(strip_tags($postData['longitude'])) === '' ||
    !is_numeric(trim(strip_tags($postData['latitude']))) ||
    !is_numeric(trim(strip_tags($postData['longitude'])))
){
    echo 'les valeurs saisies ne correspondent pas';
    exit;
}

$townName=trim(strip_tags($postData['town-name']));
$spotName=trim(strip_tags($postData['spot-name']));
$latitude=trim(strip_tags($postData['latitude']));
$longitude=trim(strip_tags($postData['longitude']));

$insertSpot=$mysqlClient->prepare('INSERT INTO spots(town_name, spot_name, latitude, longitude) VALUES (:town_name, :spot_name, :latitude, :longitude)');
$insertSpot->execute([
    'town_name'=>$townName,
    'spot_name'=>$spotName,
    'latitude'=>$latitude,
    'longitude'=>$longitude,
]);
header('location: /index.php');
exit;