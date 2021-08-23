<?php

require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('projet_data/');



$router->map('GET', '/', function() {
require './view/index.php';
});

$router->map('GET', '/infos', function() {
require './view/infos_view.php';
});

$match = $router->match();
if($match !== null){
if (is_callable($match['target'])){
call_user_func($match['target']);
} else {
require './view/404_view.php';
}
} else {
echo'error';
}