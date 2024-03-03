<?php

$usersStatement=$mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users =$usersStatement->fetchAll();

$fishsStatement=$mysqlClient->prepare('SELECT * FROM fishs');
$fishsStatement->execute();
$fishs=$fishsStatement->fetchAll();