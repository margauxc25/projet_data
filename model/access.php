<?php

try
{
$mydb = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'margauxcoppi', '@Marslab2506');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

