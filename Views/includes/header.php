<div class="cover col-12" style="">
 
  <div class="groundcover">

    <?php
       require "Views/includes/snipet/main_nav_bar.php";
    ?>

    <div class="row subcover d-none ">
      <div class="abonnees col-2" style="color:red;">
        + 300 Abonnées
      </div>
    </div>
<?php
    require "Views/includes/snipet/laisservousguider.php";
    ?>
  

    <div id="carrousselle" style="z-index:11; left:0;right:0; top:0; bottom:0;position:absolute; overflow:; ">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item " data-bs-interval="10000">
            <img src="Views/assets/covers/5.png" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item active"  data-bs-interval="2000">
            <img src="Views/assets/covers/3.png" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item">
            <img src="Views/assets/covers/6.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <?php
    require "Views/includes/snipet/laisservousguider.php";
    ?>
    </div>
  </div>

