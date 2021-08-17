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
$index_card->execute();
$all = $index_card->fetchAll();
print_r($all);

// INDEX REQUEST BY TYPE

SELECT infos.id_pokemon, infos.name, infos.url
FROM types_has_infos
JOIN types
ON types_has_infos.types_id_type = types.id_type
JOIN infos
ON types_has_infos.infos_id_pokemon = infos.id_pokemon
WHERE types.type = "Grass"



// INDEX REQUEST BY GENERATIONS

SELECT infos.id_pokemon, infos.name, infos.url//, generations.generation
FROM infos
JOIN generations
ON infos.generations_id_generations = generations.id_generations
WHERE infos.generations_id_generations = 1


// INFOS POKEMON

SELECT infos.id_pokemon, infos.name, infos.url, types.type, generations.generation, infos.total, infos.hp, infos.attack, infos.defense, infos.special_attack, infos.special_defense, infos.speed
FROM infos
JOIN types_has_infos
ON types_has_infos.infos_id_pokemon = infos.id_pokemon
JOIN types
ON types_has_infos.types_id_type = types.id_type
JOIN generations
ON infos.generations_id_generations = generations.id_generations
JOIN stats
ON
WHERE infos.id_pokemon = 151





// TEST 

SELECT stats.value AS hp, stats.value AS total
FROM stats
INNER JOIN infos
ON infos.hp = stats.id_stats
WHERE infos.id_pokemon = 151













SELECT infos.id_pokemon, infos.name, infos.url, stats.value
FROM infos
JOIN stats
ON stats.id_stats = infos.total
WHERE infos.id_pokemon = 151