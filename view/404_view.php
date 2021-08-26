<?php

require './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('includes');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]); ?>
<?php echo $twig->render('404.twig') ?>

