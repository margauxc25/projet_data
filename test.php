<?php

try
{
$pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'Wormhole.9');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}


 



try {
            $stmt = $pdo->prepare("SELECT infos.id_pokemon, infos.name, infos.url, types.type, generations.generation, total.total, hp.hp, attack.attack, defense.defense, special_attack.special_attack, special_defense.special_defense, speed.speed
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
WHERE infos.id_pokemon = 151");
            $stmt->execute();
            $result_infos = $stmt->fetchAll(PDO::FETCH_NUM);
          } catch (Exception $ex) { echo $ex->getmessage(); }
          // print_r(count($result_infos));
        if (count($result_infos) == 2){
        $array1 = $result_infos[0];
        $array2 = $result_infos[1][3];
        array_push($array1, $array2);
    }
else {
    print_r($result_infos);
}

    print_r($array1);