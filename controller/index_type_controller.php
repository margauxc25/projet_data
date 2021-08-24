<?php

require ('../model/access.php');

$type = "";
if(isset($_POST['type']) AND !empty($_POST['type'])){
    $type = $_POST['type'];
}

require ('../model/index_type_model.php');
foreach ($result_type as $type) {
require ('../view/index_type_view.php');
} 


