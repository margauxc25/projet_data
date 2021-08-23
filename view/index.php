<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/index.css">
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
  echo $twig->render('./header.twig') ?>
  <?php echo $twig->render('./nav.twig') ?>
  




  <article></article>

  <a href="#tothetop"><img src="../assets/images/arrowtothetop.svg" class="buttontothetop" alt=""></a>

  <?php echo $twig->render('./footer.twig') ?>
  <script src="../assets/javascript/menuGeneration.js"></script>
  <script src="../assets/javascript/menuTypes.js"></script>
</body>

</html>