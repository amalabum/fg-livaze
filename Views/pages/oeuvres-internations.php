<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
  // recuperation des 5meilleurs livres
 

?>
           


<body>
  <div id="livraze_app">
    <?php
       
      require "Views/includes/snipet/cover.php";
      cover("
      <div class='cover_collection'  style=''>
        <div class='relative_bloc  col-md-5 col-sm-12 col-ms-12'>
     
           <div class='cover_collection_legende'> <h4>  C'EST PARTIE !..</h4> </div>

           <div id='collection_cover_title'>             
                <span class='collection_cover_tile' style='text-transform:capitalize;'>Laissez-vous guider par les livres <span>
                <h3>
                 <p class='p_collection_exttr'>à partir de 4,6$/mois 
                </h3>
                <a class='boutton_profiter' href='packages'><button class='btncust btn'> Profitez de l'offre</button></a>
           </div>          
      </div>
     
      ","",'Views/assets/covers/5.png');
?>
    <div class="collection  wd-65 row">
      <div class="col-md-9 col-sm-12 col-lg-8">

        

<?php

      if(isset($_GET['bycategorie']) AND isset($_GET['bycategoriename']) ){

        $mycategorie=htmlspecialchars($_GET['bycategorie']);
        $mycategoriename=htmlspecialchars($_GET['bycategoriename']);

        if (!empty($mycategorie AND is_numeric($mycategorie))) {
                    
         

             $recup_categorie= $db->query("SELECT * FROM livres where categorie=$mycategorie AND collections='etrangere' ORDER BY id DESC ");
             while ($all_datas_l= $recup_categorie->fetch()){
            $livres_etrang_categor[]=$all_datas_l;
     
             }?>


        <!-- <div class="categorie_title">
          <div class="col-12">
            livraze / nos livres
          </div>
          <div class="col-12">
            <h4>
              Categorie : All mycategorienale
            </h4>
        
            <span clas="categorie_span"> Toutes les categorie confondus </span>
            <hr style="">
          </div>
        </div> -->
  
        
         <?php
          
      


          if(!empty($livres_etrang_categor)){


       echo"  <div class='categorie_title'>
          <div class='col-12'>
            livraze / nos livres
          </div>
          <div class='col-12'>
            <h4>
              Categorie : $mycategoriename
            </h4>
        
            <span clas='categorie_span'></span>
            <hr style=>
          </div>
        </div> ";

       

         foreach ($livres_etrang_categor as $livre):  ?>
        <div class="col-12 row collection_cards ">
          <div class="col-6 col-lg-3">
            <a href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>"><img src="Views/uploads-images/nos_livres/<?php echo $livre['couverture'];?>" alt=""></a>
          </div>
          <div class="col-6 col-lg-9 ">
           <a style="text-decoration:none;color:#000000;text-transform:uppercase;" href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>">  <h5 class="titre_du_livre"><?php echo $livre['titre'] ?></h5></a>

            <div class="categorie_span">
              
              <span> <i> <?php  $id=$livre['categorie'];
                            $categorie= $db->query("SELECT designation  FROM categorie WHERE id='".$id."'");  
                            $mycategorie_designation= $categorie->fetch();
                            if(empty( $mycategorie_designation)){
                              echo "non classé";
                            }
                            else{
echo  $mycategorie_designation['designation'];
                            } ?> </i></span>
            </div>
            <h6 >Auteur : <?php echo $livre['auteur'] ?></h6>  
            <p>
              <?php
       $descript= $livre['synthese'];

echo substr($descript,0,100);
echo "...";


     $titre=$livre['titre'];
 require "Views/admin/mydash/snipets/ensavoirplus.php";
       ?>



            </p>

          </div>
        </div>
        <?php endforeach ;


          }
          elseif(empty($livres_etrang_categor)){


         
           echo"<h4 style='margin-top:50px;margin-bottom:50px;'> « Désolé, Aucun resultat n'est disponible ...»</h4>";

         
          }

?>





































       <!-- <div class="pagination_bloc mt-5">
          <ul>
            <li>« </li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>...</li>
            <li>»</li>
          </ul>
       </div> -->




<?php
        }
        else{
        
      echo"  <div class='categorie_title'>
          <div class='col-12'>
            
          </div>
          <div class='col-12'>
            <h4>
              Categorie : ";
?> ...

    <?php   if(isset($_GET['bycategorie'])){

            $mycategorie=htmlspecialchars($_GET['bycategorie']);
            echo $mycategorie;
           }
?>
 <?php  echo" </h4>
        
            <span clas='categorie_span'> Aucun resultant n'est disponible pour l'instant </span>
            <hr>
          </div>

        </div>
        
        
       <h3 style='margin-left:20px;'>voir aussi </h3>  
        
        ";
                












       
        }

      }
       elseif(!isset($_GET['bycategorie']) AND !isset($_GET['bycategoriename'])){

?>
     <div class="categorie_title mt-3">
          <div class="col-12">
            
          </div>
          <div class="col-12">
            <h4>
              Categorie : toutes les categories
            </h4>
        
            <span clas="categorie_span"> Toutes les categorie confondus </span>
            <hr style="">
          </div>
        </div>

     <?php     



foreach ($etrange_collections as $livre):  ?>
        <div class="col-12 row collection_cards ">
          <div class="col-6 col-lg-3">
            <a href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>"><img src="Views/uploads-images/nos_livres/<?php echo $livre['couverture'];?>" alt=""></a>
          </div>
          <div class="col-6 col-lg-9 ">
           <a style="text-decoration:none;color:#000000;" href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>">  <h5 class="titre_du_livre"><?php echo $livre['titre'] ?></h5></a>

            <div class="categorie_span">

            <?php $collection=$livre['collections']?>
              
              <span><?php  if(!empty($collection) AND $collection=='Locale'){
           echo "Oeuvre congolais , ";
              } ?> <i>  <?php    $id=$livre['categorie'];
                            $categorie= $db->query("SELECT designation  FROM categorie WHERE id='".$id."'");  
                            $mycategorie_designation= $categorie->fetch();
                            if(empty( $mycategorie_designation)){
                              echo "non classé";
                            }
                            else{
echo  $mycategorie_designation['designation'];
                            } ?> </i></span>
            </div>
            <h6 >Auteur : <?php echo $livre['auteur'] ?></h6>  
            <p>
              <?php
       $descript= $livre['synthese'];

echo substr($descript,0,100);
echo "...";

$titre=$livre['titre'];
 require "Views/admin/mydash/snipets/ensavoirplus.php";
       ?>



            </p>

          </div>
        </div>
        <?php endforeach ;

     }
?>














    
      
      </div>
      <div class="col-md-3 col-sm-12 col-lg-4">
        <div class="nombre_des_livres">
         
          <div class="col-12 pub_card">
            <div
            style="width:90px;font-weight:bold;margin-top:30px;padding-bottom:10px; margin-bottom:20px; border-bottom: 2px solid #e54d4d;"
            >
             PLUS RECENT</div>
         
 <a href="details-livre?livreaconsulter=<?php echo $la_une_lb['id'] ?>"> <img src="Views/uploads-images/nos_livres/<?php echo $la_une_lb['couverture']?>" alt=""></a>
          </div>
                   <div class="col-12 mt-5 categories_card">
<h5> Categories </h5>

<?php require "Views/includes/snipet/categorie_list.php";  ?>


          </div>
          
        </div>
      </div>

      <?php
  //require "Views/pages/categories.php";
     ?>


    </div>


 



    <?php
  require "Views/includes/footer.php";
?>

    <?php
  require "Views/includes/js.php";
?>

</body>

</html>






