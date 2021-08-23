<?php



require('./model/access.php');
$searchValue = $_POST['search'];


function search($search, $mydb){
    $req_search = $mydb->prepare(
    "SELECT infos.id_pokemon, infos.name, infos.url, types.type, generations.generation, total.total, hp.hp, attack.attack, defense.defense, special_attack.special_attack, special_defense.special_defense, speed.speed
FROM infos
JOIN types_has_infos
ON types_has_infos.infos_id_pokemon = infos.id_pokemon
JOIN types
ON types_has_infos.types_id_type = types.id_type
JOIN generations
ON infos.generations_id_generations = generations.id_generations
JOIN total
ON total.id_pokemon = infos.id_pokemon
JOIN hp
ON hp.id_pokemon = infos.id_pokemon
JOIN attack
ON attack.id_pokemon = infos.id_pokemon
JOIN defense
ON defense.id_pokemon = infos.id_pokemon
JOIN special_attack
ON special_attack.id_pokemon = infos.id_pokemon
JOIN special_defense
ON special_defense.id_pokemon = infos.id_pokemon
JOIN speed
ON speed.id_pokemon = infos.id_pokemon
WHERE infos.id_pokemon LIKE '%$searchValue%'");
$req_search->execute();
$result_infos = $req_search->fetchAll();



?>

