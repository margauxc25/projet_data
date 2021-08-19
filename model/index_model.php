<?php

require('access.php');

$index_card = $pdo->prepare(
    "SELECT infos.id_pokemon, infos.name, infos.url FROM infos"
);
$index_card->execute();
$all = $index_card->fetchAll();
print_r($all);

?>