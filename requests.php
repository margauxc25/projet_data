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


// $index_card = $pdo->prepare(
//     "SELECT infos.id_pokemon, infos.name, infos.url FROM infos"
// );
// $index_card->execute();
// $all = $index_card->fetchAll();
// print_r($all);

// INDEX REQUEST BY TYPE

// SELECT infos.id_pokemon, infos.name, infos.url
// FROM types_has_infos
// JOIN types
// ON types_has_infos.types_id_type = types.id_type
// JOIN infos
// ON types_has_infos.infos_id_pokemon = infos.id_pokemon
// WHERE types.type = "Grass"



// INDEX REQUEST BY GENERATIONS

// SELECT infos.id_pokemon, infos.name, infos.url
// FROM infos
// JOIN generations
// ON infos.generations_id_generations = generations.id_generations
// WHERE infos.generations_id_generations = 1


// INFOS POKEMON

// CREATE VIEWS

// TOTAL

// CREATE VIEW total AS
// SELECT infos.id_pokemon, stats.value AS total
// FROM infos
// JOIN stats
// ON stats.id_stats = infos.total

// HP

// CREATE VIEW hp AS
// SELECT infos.id_pokemon, stats.value AS hp
// FROM infos
// JOIN stats
// ON stats.id_stats = infos.hp

// ATTACK

// CREATE VIEW attack AS
// SELECT infos.id_pokemon, stats.value AS attack
// FROM infos
// JOIN stats
// ON stats.id_stats = infos.attack


// DEFENSE

// CREATE VIEW defense AS
// SELECT infos.id_pokemon, stats.value AS defense
// FROM infos
// JOIN stats
// ON stats.id_stats = infos.defense


// SPECIAL_ATTACK

// CREATE VIEW special_attack AS
// SELECT infos.id_pokemon, stats.value AS special_attack
// FROM infos
// JOIN stats
// ON stats.id_stats = infos.special_attack


// PUTAIN DE REQUETE

// SELECT infos.id_pokemon, infos.name, infos.url, types.type, generations.generation, total.total, hp.hp, attack.attack, defense.defense, special_attack.special_attack, special_defense.special_defense, speed.speed
// FROM infos
// JOIN types_has_infos
// ON types_has_infos.infos_id_pokemon = infos.id_pokemon
// JOIN types
// ON types_has_infos.types_id_type = types.id_type
// JOIN generations
// ON infos.generations_id_generations = generations.id_generations
// JOIN total
// ON total.id_pokemon = infos.id_pokemon
// JOIN hp
// ON hp.id_pokemon = infos.id_pokemon
// JOIN attack
// ON attack.id_pokemon = infos.id_pokemon
// JOIN defense
// ON defense.id_pokemon = infos.id_pokemon
// JOIN special_attack
// ON special_attack.id_pokemon = infos.id_pokemon
// JOIN special_defense
// ON special_defense.id_pokemon = infos.id_pokemon
// JOIN speed
// ON speed.id_pokemon = infos.id_pokemon
// WHERE infos.id_pokemon = 445


//SEARCH REQUEST

