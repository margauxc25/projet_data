<!-- Search bar -->

<li class="livesearch-item" >
    
  <form class="pokemon_card_search"  action="infos"  method="post">
      
    <button type="submit" name="id" value="<?php echo $pokemon[0]?>">

    <!-- pokemon's picture -->
    <img class="livesearch-item_img" src="<?php echo $pokemon[2]?>" alt="pokemon picture">

    <!-- pokemon's name -->
    <p class="namesearch"> <?php echo $pokemon[1]?></p> 

    <!-- pokemon's number -->
    <p class="nbmsearch"> N°<?php echo $pokemon[0]?> </p></button>
      
  </form>

</li>


