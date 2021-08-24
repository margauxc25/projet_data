<form class="pokemon_card"  action="infos"  method="post">
  <img class="card_img"  src="<?php echo $type[2]?>" alt="image du pokemon">
  <button type="submit" name="id" value="<?php echo $type[0]?>" class="card_p"><?php echo $type[1]?></button>
</form>