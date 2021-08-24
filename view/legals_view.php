<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/mentionslegalesstyles.css">
    <link rel="stylesheet" href="./assets/css/footerstyle.css">
    <link rel="stylesheet" href="./assets/css/headerstyle.css">
    <title>Pokedata</title>
</head>
<body class="container">
<header>
<?php
    require './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('includes');
    $twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]); ?>
    <?php
    echo $twig->render('./header.twig') ?>  
</header>
<a href="/projet_data" class="backtohome"> ← Go back to the pokedex</a>
<main >
<h2>Mentions légales</h2>
<div>
    <h3>Editeur du site :</h3>
    <p>Stagiares Onlineformapro - Access code school</p>
    <p>Clément POUPENEY : <a href="mailto:poupeney.c@codeur@online"></a>poupeney.c@codeur@online</p>
    <p>Margaux COPPI : <a href="mailto:coppi.m@codeur.online"></a>coppi.m@codeur.online</p>
    <p>Manon MILLE : <a href="mailto:mille.m@codeur.online"></a>mille.m@codeur.online</p>
    <p>Bryan PERGAUD : <a href="mailto:pergaud.b@codeur.online"></a>pergaud.b@codeur.online</p>
    <p>10 rue Pablo Picasso</p>
    <p>25000 Besançon</p>
    <p>Date de création du site : 29/07/2021</p>
</div>
<div>
    <h3>Hébergement : </h3>
    <p>Onlineformapro</p>
    <p>Siège sociale : 19 rue du Praley 70000 Vesoul</p>
    <p>Site web : <a href="https://www.onlineformapro.com/"></a> Onlineformapro</p>
</div>
</main>

<?php echo $twig->render('./footer.twig') ?> 

</body>
</html>