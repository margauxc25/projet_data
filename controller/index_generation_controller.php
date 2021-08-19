<?php


require ('./model/index_generation_model.php');

if(isset($_POST['value']) AND !empty($_POST['value'])){
    echo JSON_encode(generation($_POST['value'], $mydb));
}
else {
    echo "error";
}
require ('./view/index_generation_view.php');