<?php


    $req_search = $mydb->prepare(
    "SELECT infos.id_pokemon, infos.name, infos.url FROM infos WHERE infos.name LIKE :search1 OR infos.id_pokemon LIKE :search2");
$req_search->execute([
    "search1" => $search, "search2" =>$search]);
$pokemons = $req_search->fetchAll(); 
$rowTotal = $req_search->rowCount();
?>

