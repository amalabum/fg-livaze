<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
?>

<body>
	<div id="livraze_app">

		<?php
     
      
      require "Views/includes/snipet/cover.php";
      cover("Resultat(s)","...",'Views/assets/covers/web-cover/2.png');

?>

		<div class="relative_bloc custum_container wd-60 row mt-5" style="font-size:1.2em;">
			<div id="caption_way" class="">
				... 
			</div>
			
   






        <?php



    if(isset($_GET['keyword'])) {
   
    $key = $_GET['keyword'];
	$keywords= explode(" ",trim($key));
	for ($i=0; $i < count($keywords) ; $i++) 
	 $kw[$i]= "titre like '%".$keywords[$i]."%'";

      
	$posts= $db->query("SELECT * FROM livres WHERE ".implode(" or ",$kw)); 
    while ($all_post =  $posts->fetch()){
       $bykeys[]=$all_post;
	}


	// $recup_article_categories= $db->query("SELECT * FROM publications"); 
    // while ($all_categorie =  $recup_article_categories->fetch()){
    //    $bycategorie_for_pagination[]=$all_categorie;
    // }
         



   //var_dump($bykeys);


   if(!empty($bykeys)){
       
       $founded_pots= count($bykeys);
     
       echo "
          <div class='col-12'>
            <h4>
                 $founded_pots Resultat(s) 
             <!--  Categorie : toutes les categories -->
            </h4>
        
            <span clas=''style='font-size:14px;'> Toutes les categories confondus </span>
            <hr>
          </div>
       ";


       foreach ($bykeys as $livre):  ?>
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

echo substr($descript,0,200);
echo "...";


       ?>

            <div class="lire_plus">
              <a href="details-livre?livreaconsulter=<?php echo $livre['id'] ?>" class="" style="font-weight:bold;">En savoir plus</a>
            </div>



            </p>

          </div>
        </div>
        <?php endforeach ; 

       

   }
   else{
   
     echo "
          <div class='col-12'>
            <h4>
               Oups!  Aucun Resultat n'est disponible
               
            </h4>
        
            <span clas=''style='font-size:14px;'>Désolé mais nous prenoms en compte votre demande et nous verons comment l'intergrer dans la plate forme si necessaire  </span>
            <hr>
          </div>
        ";
   }




















 


  












                        }
?>














     
      </div>



  
      
   
    
<!-- <div style="text-align:center; position:relative;margin-top:50px;margin-bottom:50px;">
 
    
   

  

		</div> -->
				     <?php
  require "Views/pages/partenaires.php";
?> 
     <?php
 require "Views/includes/footer.php";
 
?>
			</div>
			
		</div>
				
 
  

   <?php
  require "Views/includes/js.php";
?>
</body>




</html> 




