<form class="pokemon_card"  action="infos"  method="post">
  
  <button type="submit" name="id" value="<?php echo $type[0]?>" class="card_p">

    <img class="card_img"  src="<?php echo $type[2]?>" alt="image du pokemon"><?php echo $type[1]?>  
    <p><?php echo $type[0]?></p>

  </button>

</form>
