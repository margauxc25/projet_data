<?php


require ('./model/index_type_model.php');

if(isset($_POST['value']) AND !empty($_POST['value'])){
    echo JSON_encode(type($_POST['value'], $mydb));
}
else {
    echo "error";
}
require ('./view/index_type_view.php');



// into form method post 
// inside 
// button with same class and value qqui sera la variable que je met dans la requete