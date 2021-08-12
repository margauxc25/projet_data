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
    <header id="tothetop">
      <?php include ('../includes/header.php');?>  
    </header>


<nav>
<button class="buttonGenerations" id="generations"> All generations</button>
<ul class="menuGenerations">
        <li><a class="menuLinkGenerations" href="#">gen1</a></li>
        <li><a class="menuLinkGenerations" href="#">gen2</a></li>
        <li><a class="menuLinkGenerations" href="#">gen3</a></li>
</ul>

<button class="buttonTypes" id="types"> All types</button>
<ul class="menuTypes">
        <li><a class="menuLinkTypes" href="#">types</a></li>
        <li><a class="menuLinkTypes" href="#">types</a></li>
        <li><a class="menuLinkTypes" href="#">types</a></li>
</ul>
</nav>

<article></article>

<a href="#tothetop" ><img src="../assets/images/arrowtothetop.svg" class="buttontothetop"alt=""></a>


<?php include('../includes/footer.php'); ?>
<script src="../assets/javascript/menuGeneration.js"></script>
<script src="../assets/javascript/menuTypes.js"></script>
</body>
</html>
