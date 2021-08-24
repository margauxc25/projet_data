<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/index.css">
  <title>Pokedata</title>
</head>

<body>
  <?php
  require './vendor/autoload.php';

  $loader = new \Twig\Loader\FilesystemLoader('includes');
  $twig = new \Twig\Environment($loader, [
    'cache' => false,
  ]); ?>
 
  <?php
  echo $twig->render('./header.twig') ?>
  <?php echo $twig->render('./nav.twig') ?>
  




  <article class="section_ajax">
<?php foreach ($all as $pokemon): ?>
<div class="pokemon_card">
  <img class="card_img" src="<?php echo $pokemon[2]?>" alt="image du pokemon">
  <p class="card_p"><?php echo $pokemon[1]?></p>


</div>

<?php endforeach; ?>
  </article>

  <a href="#tothetop"><img src="./assets/image/arrowtothetop.svg" class="buttontothetop" alt=""></a>

  <?php echo $twig->render('./footer.twig') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./assets/js/menuGeneration.js"></script>
  <script src="./assets/js/menuTypes.js"></script>
<script src="./assets/js/req_gen.js"></script>
<script src="./assets/js/req_type.js"></script>
</body>

</html>