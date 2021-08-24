<?php



$index_card = $mydb->prepare(
    "SELECT infos.id_pokemon, infos.name, infos.url FROM infos LIMIT 10"
);
$index_card->execute();
$all = $index_card->fetchAll();

// for ($i=0; $i < count($all); $i++) { 
//     print_r($all[$i][0]);
    
// }

?>