<?php

require ('./model/access.php');


function generation($gen, $mydb){
    $req_gen = $mydb->prepare("SELECT infos.id_pokemon, infos.name, infos.url
FROM infos
JOIN generations
ON infos.generations_id_generations = generations.id_generations
    WHERE infos.generations_id_generations = '".$gen."'");
    $req_gen->execute();
    $result_gen = $req_gen->fetchAll();
}
return $result_gen;