<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/statsstyle.css">
    <link rel="stylesheet" href="./assets/css/footerstyle.css">
    <link rel="icon" type="image/png" href="./assets/image/favicon.png" />
    <title>Pokedata</title>
</head>

<body>

    <?php
    require './vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('includes');
    $twig = new \Twig\Environment($loader, [
        'cache' => false,
    ]); ?>

<!-- Header -->
    <?php echo $twig->render('./header.twig') ?>

<!-- infos/stats  -->
    <?php echo $twig->render('./stats.twig', ['pokemon'=>infos($id, $mydb)])?>

<!-- Footer  -->
    <?php echo $twig->render('./footer.twig') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./assets/js/searchbar.js"></script>



</body>

</html>