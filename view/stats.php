<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/statsstyle.css">
    <title>Pokedata</title>
</head>

<body>
    <?php
    require '../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('../includes');
    $twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]); ?>
    <?php
    echo $twig->render('header.twig') ?>

    <?php echo $twig->render('./stats.twig', ['pokemon'=> 
    ['name' => 'pickachu',
    'generation' => 3,
    'type1' => 'Fire',
    'type2' => 'Electric',
    'number' => 23,
    'pv' => 523,
    'attack' => 23,
    'defense' => 55,
    'spdefense1' => 365,
    'spdenfense2' => 255,
    'speed' => 65]])?>
    
    <?php echo $twig->render('footer.twig') ?>
</body>

</html>