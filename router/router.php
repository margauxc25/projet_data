<?php

require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('projet_data/');

$router->map('GET', '/', function() {
require 'testhome.php';
});

$router->map('GET', '/aaa', function() {
require 'testaaa.php';
});


$match = $router->match();
if($match !== null){
if (is_callable($match['target'])){
call_user_func($match['target']);
} else {
require 'test404.php';
}
} else {
echo'error';
}