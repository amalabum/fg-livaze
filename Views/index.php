<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
?>

<body style=" background-color: ;">
  <div id="livraze_app">
  <?php
    require "Views/includes/header.php";
    // recuperation des meileurs livres
    //  $recup_d= $db->query("SELECT * FROM livres ORDER BY id DESC limit 4");
    //  while ($all_data= $recup_d->fetch()){
    //  $noslivres[]=$all_data;
    // //  var_dump( $noslivres);
    //  }
  ?>
</div>

  <div class="top_vendu" style="background:none;" >
    <div  id="top_livres_vendu" class=" relative_bloc  container-fluid row" >
   
      <div class="text_top_vendu  ftco-animate pl-5">
        <p class="">
         <span class="decouverte"> Découvrez nos Selections </span> les plus aimées 
          
          
        </p>
        <a href="packages"><button class=" btn pdg-20 btn-info " style=""> Je me lance</button></a>
      </div> 
      <div class="livres_top_vendu  justify-content-end ">        
          
            <div class="item_toplivre"><img class="img-top1" src="Views/assets/covers/A.png" alt=""
                height="10px"></div>
            <div class="item_toplivre"><img class="img-top2" src="Views/assets/covers/E.png" alt="">
            </div>
            <div class="item_toplivre"><img class="img-top3" src="Views/uploads-images/livres/topvendu/2.png" alt="">
            </div>
            <div class="item_toplivre"><img class="img-top4" src="Views/uploads-images/livres/topvendu/5.png" alt="">
            </div>
            <div class="item_toplivre"><img class="img-top5" src="Views/uploads-images/livres/topvendu/6.png" alt="">
            </div>
                
      </div>

    </div>
  </div>


 <div class="container-livre-prop"  style="  background-image: url('Views/assets/covers/web-cover/2.png');">
    <div class="proposition ">
      <div class="container ">

        <div class="row " style=" left:70px;z-index:20000; position:absolute;z-index:;">
          <div class="col-md-6.5 pos " style=" padding-left 49px;padding-top:90px;color:#C3C3C3; ">
            <h5 class="mb text-left mb-4" style="font-size:21px;color:#ffffff;">« Puis-je proposer Mes livres à la bibliotheque ? » </h5>
            <div style="padding-left:20px; margin-top:-20px; margin-bottom:40px;">avec plaisir !</div>

            <button href="contact" class="btn pdg-20"
              style="padding:10px 20px;font:weight:bold;">Contacter
              notre équipe </button>
          </div>
        </div>
      </div>
    </div>
    <div class="subcontainer-livre-prop">
      d
    </div>


  </div>
  <section class="section_title" >
     <h2 class="" style="text-align:center;">Nos collections</h2>
     
  </section>
 
  <div class="extrait_collection">
    <div class="collection">

 <?php foreach ($noslivres as $livre):  ?>
       
      <div class="collectionExtract-cards">
        <div class="imagecover">
        <a href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>">  <img src="Views/uploads-images/nos_livres/<?php echo $livre['couverture'];?>" width="100%" class="mr-6 " alt="image" /></a>
        </div>
        <div class="covertext">
          <span><?php echo substr($livre['titre'],0,40); echo "..." ?></span> <br>
          Par : <i> <a href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>"><?php echo $livre['auteur'] ?></a></i>
        </div>
      </div>
<?php endforeach; ?> 
        </div>
  </div>


  <div class="btnplusdivs" style="position:relative;margin-top:-120px;">
    <a href="oeuvres-internationaux"> <button class="btn btn-info pdg-20 "> Voir Nos collections</button></a>
  </div>

  
  <div class="">
              <div class="getstart wd-60 container-fluid row" style="margin:auto;">
   <div class="col-md-8 col-sm-12 col-lg-8"><p style="display:block;"> « La mission de Livraze est d'encourager les jeunes de la ville de Goma, les touristes ou les visiteurs qui y séjournent à découvrir les livres de manière organisée.» </p></div>
   <div class="col-md-4 col-sm-12 col-lg-4 je_m_abonne" > <a href="apropos" class=""> En savoir plus </a></div>
   </div>
    <?php
 require "Views/pages/partenaires.php";
?>





    <?php
 require "Views/includes/footer.php";
?>

</body>
<?php
 require "Views/includes/js.php";
?>

</html>