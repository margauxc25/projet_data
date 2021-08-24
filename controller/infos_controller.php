<?php

require('./view/infos_view.php');

if(isset($_POST['value']) AND !empty($_POST['value'])){
    echo JSON_encode(infos($_POST['value'], $mydb));
}
else {
    echo "error";
}

require('./model/infos_model.php');

?>