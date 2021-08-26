<form class="pokemon_card"  action="infos"  method="post">

  <button type="submit" name="id" value="<?php echo $gen[0]?>" class="card_p">

    <img class="card_img"  src="<?php echo $gen[2]?>" alt="image du pokemon"><?php echo $gen[1]?>
    <p><?php echo $gen[0]?></p>

  </button>

</form>

