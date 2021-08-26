<?php

require ('../model/access.php');
$generation = "";
if(isset($_POST['generation']) AND !empty($_POST['generation'])){
    $generation = $_POST['generation'];
}

require ('../model/index_generation_model.php');
foreach ($result_gen as $gen) {
    require ('../view/index_generation_view.php');
} 