<?php



    $req_type = $mydb->prepare("SELECT infos.id_pokemon, infos.name, infos.url
    FROM types_has_infos
    JOIN types
    ON types_has_infos.types_id_type = types.id_type
    JOIN infos
    ON types_has_infos.infos_id_pokemon = infos.id_pokemon
    WHERE types.type = ?");
    $req_type->execute([$type]);
    $result_type = $req_type->fetchAll();

// return $result_type;

