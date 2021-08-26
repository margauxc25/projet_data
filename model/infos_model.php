<?php
require('./model/access.php');
// $array1 = array();


function infos($id, $mydb){
    $infos_pokemon = $mydb->prepare(
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
WHERE infos.id_pokemon = :id");
$infos_pokemon->execute(["id"=> $id]);
$result_infos = $infos_pokemon->fetchAll();

// print_r($infos);
if (count($result_infos) == 2){
    $array1 = $result_infos[0];
    $array2 = $result_infos[1][3];
    array_push($array1, $array2);
    return $array1;
}
else if (count($result_infos) == 1){
    $array3 = $result_infos[0];
    return $array3;
}
    

}



?>

