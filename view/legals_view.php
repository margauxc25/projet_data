<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/mentionslegalesstyles.css">
    <link rel="stylesheet" href="./assets/css/footerstyle.css">
    <link rel="stylesheet" href="./assets/css/headerstyle.css">
    <link rel="icon" type="image/png" href="./assets/image/favicon.png" />
    <title>Pokedata</title>
</head>

<body class="container">

    <?php
        require './vendor/autoload.php';

        $loader = new \Twig\Loader\FilesystemLoader('includes');
        $twig = new \Twig\Environment($loader, [
            'cache' => false,
        ]); ?>

<!-- Header -->
    <?php echo $twig->render('./header.twig') ?>  

<!-- Link to go back to the index_view -->
    <a href="/projet_data" class="backtohome"> ← Go back to the pokedex</a>

    <main>

        <h2>Legal Notice</h2>

        <div>
            <h3>Website editors :</h3>
            <p> Trainees at Onlineformapro - Access code school</p>
            <p>Clément POUPENEY : <a href="mailto:poupeney.c@codeur@online"></a>poupeney.c@codeur@online</p>
            <p>Margaux COPPI : <a href="mailto:coppi.m@codeur.online"></a>coppi.m@codeur.online</p>
            <p>Manon MILLE : <a href="mailto:mille.m@codeur.online"></a>mille.m@codeur.online</p>
            <p>Bryan PERGAUD : <a href="mailto:pergaud.b@codeur.online"></a>pergaud.b@codeur.online</p>
            <p>10 rue Pablo Picasso</p>
            <p>25000 Besançon, France</p>
            <p>Website creation date : 29/07/2021</p>
        </div>

        <div>
            <h3>Host : </h3>
            <p>Onlineformapro</p>
            <p>Head office : 19 rue du Praley 70000 Vesoul</p>
            <p>Website : <a href="https://www.onlineformapro.com/" class="onlinewebsite">Onlineformapro</a></p>
        </div>

    </main>

    <!-- Footer -->
    <?php echo $twig->render('./footer.twig') ?> 

</body>
</html>