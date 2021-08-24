<?php

require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('projet_data/');



$router->map('GET', '/', function() {
require './controller/index_controller.php';
});

$router->map('GET', '/search', function() {
require './controller/search_controller.php';
});

$router->map('GET', '/generation', function() {
require './controller/index_generation_controller.php';
});

$router->map('GET', '/type', function() {
require './controller/index_type_controller.php';
});

$router->map('GET', '/infos', function() {
require './controller/infos_controller.php';
});


$router->map('GET', '/[*]', function() {
require './controller/404_controller.php';
});

$match = $router->match();
if($match !== null){
if (is_callable($match['target'])){
call_user_func($match['target']);
} 
} else {
echo'error';
}