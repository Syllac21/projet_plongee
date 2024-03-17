<?php
session_start();
require_once(__DIR__.'../../middleware/db_connect.php');
require_once(__DIR__.'../../controllers/variables.php');

$postData=$_POST;

// validation des données

if(
    empty(trim($postData['firstname'])) ||
    empty(trim($postData['lastname'])) ||
    empty(trim($postData['email'])) ||
    empty(trim($postData['password'])) ||
    !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
){
    echo 'tous les champs ne sont pas remplis correctement';
    return;
}

// récupération des données

$firstname=trim(strip_tags($postData['firstname']));
$lastname=trim(strip_tags($postData['lastname']));
$email=trim(strip_tags($postData['email']));

// hachage du mot de passe

$password=password_hash(trim(strip_tags($postData['password'])), PASSWORD_DEFAULT);

//requête SQL

$insertUser=$mysqlClient ->prepare('INSERT INTO users(firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)');
$insertUser ->execute([
    'firstname'=>$firstname,
    'lastname'=>$lastname,
    'email'=>$email,
    'password'=>$password,
]);

// redirection
header('location: /index.php');
exit;
