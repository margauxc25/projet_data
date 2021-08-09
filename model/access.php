<?php

try
{
$film_db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'Wormhole.9');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

