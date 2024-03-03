<?php
session_start();
require_once(__DIR__.'/assets/php/middleware/db_connect.php');
require_once(__DIR__.'/assets/php/controllers/variables.php');

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site de plongée</title>
    <link rel="stylesheet" href="./build/output.css">
</head>
<body>
    <?php
        require_once(__DIR__.'/assets/php/components/login.php');
    ?>
    <?php
        if(isset($_SESSION['LOGGED_USER'])){
            require_once(__DIR__ . '/pages/home/home.php');
        }
        
    ?>
</body>
</html>



