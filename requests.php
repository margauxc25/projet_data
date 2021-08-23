<?php

// CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbHost = 'localhost';
$dbName = 'mydb';
$dbChar = 'utf8';
$dbUser = 'root';
$dbPass = 'Wormhole.9';
try {
  $pdo = new PDO(
    "mysql:host=".$dbHost.";dbname=".$dbName.";charset=".$dbChar,
    $dbUser, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }



// INDEX REQUEST, ALL POKEMONS WITH ID NAME & URL


$index_card = $pdo->prepare(
    "SELECT infos.id_pokemon, infos.name, infos.url FROM infos"
);



// INDEX REQUEST BY TYPE





// INDEX REQUEST BY GENERATIONS




// INFOS POKEMON


