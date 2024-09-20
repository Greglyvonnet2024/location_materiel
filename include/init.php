<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=location_materiel',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8']
);

session_start();

const root = '/location_materiel/';

// if($pdo){
//     echo 'connecter';
// }else{
//     echo 'non connecter';
// }

?>
