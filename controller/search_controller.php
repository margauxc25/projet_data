<?php
require ('../model/access.php');

$rowTotal = 0;
$search = "%{$_GET["search"]}%";
if (isset($_GET["search"]) && $_GET["search"] != "") {
    include '../model/search_model.php';
    
     if ($rowTotal > 0) { 

         foreach ($pokemons as $pokemon){
include '../view/search_view.php';
         } 

    } else { 

            echo 'pas de resultats';

    }
}
