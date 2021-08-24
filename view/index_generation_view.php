<form class="pokemon_card"  action="infos"  method="post">
  <img class="card_img"  src="<?php echo $gen[2]?>" alt="image du pokemon">
  <button type="submit" name="id" value="<?php echo $gen[0]?>" class="card_p"><?php echo $gen[1]?></button>
</form>