<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
?>

<body>
  <div id="livraze_app">
    <?php
       
      require "Views/includes/snipet/cover.php";
            
  

    if(isset($_GET['livreaconsulter'])){  

      $id= htmlspecialchars($_GET['livreaconsulter']);
      if (is_numeric($id)) {          
         $query= $db->query("SELECT * FROM livres WHERE id='".$id."'");  
         $updatble= $query->fetch();
         //var_dump($updatble);
         if(!empty($updatble)){
          
          $le_livre=$updatble;   
          
          
$titre_l=$le_livre['titre'];
$auteur_l=$le_livre['auteur'];

 cover("<span style='font-size: min(max(16px, 40vw), 42px);'>«  $titre_l »<span>","Par, $auteur_l ",'Views/assets/covers/web-cover/2.png');
     
      	
      


?>
    <div class="collection  wd-60 row" style="margin-top:0px;">


 <div class="col-md-9 col-sm-12 col-lg-9 ">

         




           <div class="categorie_title">
          
          <div class="col-12">
            
           
          </div>
        </div>
        <div class="col-12 row collection_cards"> 
                    
         <div class="col-4 d-none">
            <img src="Views/uploads-images/nos_livres/<?php echo $le_livre['couverture'];?>" alt="">
          </div>
          <div class="col-12 " style="font-size:1em;">
            
            
              <div class="categorie_span mb-2" style="font-size:19px;">
          
            
            </div>
             <img style="width:220px !important; float:left; padding-right:25px;padding-bottom:15px" src="Views/uploads-images/nos_livres/<?php echo $le_livre['couverture'];?>" alt=""><p style="text-align:justify" class="Card1Details">
                 <span>    Dans la  categorie <i > <?php  $id=$le_livre['categorie'];
                            $categorie= $db->query("SELECT designation  FROM categorie WHERE id='".$id."'");  
                            $mycategorie_designation= $categorie->fetch();
                            if(empty( $mycategorie_designation)){
                              echo "non classé";
                            }
                            else{
echo  $mycategorie_designation['designation'];
                            } ?> </i></span>. <br> <br> <?php echo $le_livre['synthese']; ?>
            </p> 

 <div class="col-12 lire_plus d-flex justify-content-start" style="margin-left:-10px;">
                 <a style="" href="https://wa.me/+243993046718?text=Bonjour livraze, je suis  interressé(s) par le livre : <?php echo  "« $titre »";?>, Est-il disponible ?" class=''> J'aimerais lire ce livre</a>
</div>

          </div>
       

          

    <?php          }
         elseif(empty($updatble)){
          echo "danger","aucune publication ne correspond à votre recherche";
         }
      }
      elseif(!is_int($id)){      
        echo "danger","aucun resultat n'a eté trouvé";
      }      
    }
     ?>
































       
<!--        
         <div class="col-5 ">
            <img src="Views/assets/covers/B.png" alt="">
          </div>
          <div class="col-7 " style="font-size:1em;">
            <div class="categorie_span">
              Il ya -14 jours
              <span> <i> Education </i></span>
            </div>
            <h4>L'Afrique du Nord et le Moyen-Orient déjà affectés par le réchauffement climatique</h4>
            <h6>Auteur : ANNE BEREST</h6>
            <p class="Card1Details">
               ssssssssssssssssss
            </p>
          </div>-->
         </div>  




         
          
     
        
          
        </div>
        <div class="col-md-3 col-sm-12 col-lg-3">
          <div class="nombre_des_livres">

            <div class="col-12 pub_card">
              <div
                style="width:130px;font-weight:bold;margin-top:30px;padding-bottom:10px; margin-bottom:20px; border-bottom: 2px solid #e54d4d;">
                PLUS RECENT</div>
             <a href="details-livre?livreaconsulter=<?php echo $la_une_lb['id'] ?>"> <img src="Views/uploads-images/nos_livres/<?php echo $la_une_lb['couverture']?>" alt=""></a>
          </div>
            <div class="col-12 mt-5 categories_card ">
              <h5> Categories </h5>
 <?php require "Views/includes/snipet/categorie_list.php";  ?>

            </div>

          </div>
        </div>



      </div>





      <?php
  require "Views/includes/footer.php";
?>

      <?php
  require "Views/includes/js.php";
?>

</body>

</html>