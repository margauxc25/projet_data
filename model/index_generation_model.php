<?php

    $req_gen = $mydb->prepare("SELECT infos.id_pokemon, infos.name, infos.url
FROM infos
JOIN generations
ON infos.generations_id_generations = generations.id_generations
    WHERE infos.generations_id_generations = ?");
    $req_gen->execute([$generation]);
    $result_gen = $req_gen->fetchAll();





// return $result_gen;