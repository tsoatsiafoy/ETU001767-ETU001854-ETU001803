<div class="containerAll">
  
<?php 
  echo count($objetAutrui);
for($i = 0; $i < count($objetMoi); $i++){?>
<div class="flip-card-container" style="--hue: 220">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <!--<img src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Brohm Lake"> !-->
        <figcaption></figcaption>
      </figure>

      <ul>
        <li></li>
        <li><?php echo $objetMoi[$i]['nomUser'];?></li>
        <li><?php echo $objetMoi[$i]['nomObjet'];?></li>
        <li><?php echo $objetMoi[$i]['prixObjet'];?></li>
        <li><?php echo $objetMoi[$i]['nomCategorie'];?></li>
        <li><?php echo $objetMoi[$i]['idObjet'];?></li>

      </ul>
    </div>

    <div class="card-back">
      <figure>
        <div class="img-bg"></div>
      </figure>

  <form action="<?php echo site_url('fiche_con/insertEchange'); ?>" method="post">
  <input type="hidden" value="<?php echo $objetAutrui[0]['idObjet'];?>" name="idObjet1" id="idObjet1"> <!--objet à autrui !-->
  <input type="hidden" value="<?php echo $objetMoi[$i]['idObjet'];?>" name="idObjet2" id="idObjet2"> <!--objet à moi !-->
  <input type="hidden" value="<?php echo $objetAutrui[0]['idUser'];?>" name="idUser1" id="idUser1">  <!--autrui!-->
    <input type="submit" value="CONFIRMER">
  </form>



      <div class="design-container">
        <span class="design design--1"></span>
        <span class="design design--2"></span>
        <span class="design design--3"></span>
        <span class="design design--4"></span>
        <span class="design design--5"></span>
        <span class="design design--6"></span>
        <span class="design design--7"></span>
        <span class="design design--8"></span>
      </div>
    </div>

  </div>
</div>

<!-- /flip-card-container -->



<?php } ?>
</div>