<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<?php require "Views/admin/mydash/includes/head.php" ?>

<body>
  <div class="container-scroller" onload="process()"> 
    <!-- partial:partials/_sidebar.html -->

   <?php require "Views/admin/mydash/includes/sidebar.php" ?>

    <!-- fin nav bar partial -->





   <?php require "Views/admin/mydash/includes/header.php" ?>

   <!-- <div class="row justify-content-center br-40 mt-5"> -->

 <?php       
                 require 'cores/add_lib.php';









$recup_categorie= $db->query("SELECT * FROM categorie ORDER BY id DESC ");
while ($all_catg=  $recup_categorie->fetch()){
    $categories[]=$all_catg;
 }

                              
    if(isset($_GET['livre'])){  

      $id= htmlspecialchars($_GET['livre']);
      if (is_numeric($id)) {          
         $query= $db->query("SELECT * FROM livres WHERE id='".$id."'");  
         $updatble= $query->fetch();
         //var_dump($updatble);
         if(!empty($updatble)){
            $edit_me=$updatble;
 
         ?>
         
        <div class="row justify-content-center br-40 mt-2">
<?php
                     if(isset($_POST['update_livre'])){
                               update_on_libr();                                                                          
                      } ?>
              <div class="col-md-7 grid-margin stretch-card   mt-2">
                <div class="card">
                  <div class="card-body">
                    <h3 class="">Livres</h3>
                    <p class="card-description">Ajouter un livre</p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="livre_title">Un titre pour le nouveau livre</label>
                        <input type="text" name="titre" <?php if(isset($_POST['titre'])){ $myvalue=$_POST['titre'];?><?php echo "value=$myvalue";}?> <?php if(!isset($_POST['titre'])){?> value="<?php echo $edit_me['titre'];}?>" class="form-control" id="livre_title" placeholder="titre">
                      </div>
                     <div class="form-group">
                        <label for="livre_auteur">Auteur du livre</label>
                        <input type="text" name="auteur" <?php if(isset($_POST['auteur'])){ $myvalue=$_POST['auteur'];?><?php echo "value=$myvalue";}?> <?php if(!isset($_POST['auteur'])){?> value="<?php echo $edit_me['auteur'];}?>"   class="form-control" id="livre_auteur" placeholder="auteur">
                      </div>

                       <div class="form-group">
                        <label for="exemplaires ">Nombre d'xemplaires </label>
                        <input type="number" name="exemplaires" <?php if(isset($_POST['exemplaires'])){ $myvalue=$_POST['exemplaires'];?><?php echo "value=$myvalue";}?> <?php if(!isset($_POST['exemplaires'])){?> value="<?php echo $edit_me['exemplaires'];}?>"  class="form-control" id="exemplaires" placeholder="nombres exemplaires">
                      </div>

                      <div class="form-group">
                        <label for="livre_auteur">Maison d'??dition</label>
                        <input type="text" name="maison_d_edition" <?php if(isset($_POST['maison_d_edition'])){ $myvalue=$_POST['maison_d_edition'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="maison_d_edition" placeholder="maison d'??dition">
                      </div>
                      
                       <div class="form-group">
                           <label for="livre_categorie">categorie</label>
                        <select name="categorie" class="form-control" id="livre_categorie">

                        
                          <?php
                          
                                   $id=$livre['categorie'];
                            $categorie= $db->query("SELECT designation  FROM categorie WHERE id='".$id."'");  
                            $mycategorie_designation= $categorie->fetch();
                            if(empty( $mycategorie_designation)){
                              echo "non class??";
                            }
                            else{
echo  $mycategorie_designation['designation'];
                            }
                          
                          
                          if(isset($_POST['categorie'])){ 
                            $myvalue=$_POST['categorie'];
                              if (!empty($myvalue)) {                              
                            ?>
                            <option value="" selected> Concerver la categorie choisie... </option>
                             <?php 
                             }elseif(empty($myvalue)){
                            $categorie_1=$mycategorie_designation['designation'];
                            $categorie_id=$mycategorie_designation['id'];                                
                            ?>


                            <option value="<?php echo $categorie_id ?>" selected>  <?php echo $categorie_1 ?>  </option>


                             <?php                       
                             }           
                          } 
                          else if (!isset($_POST['categorie'])) {
                           $categorie=$edit_me['categorie'];
                           echo" <option value='$categorie' selected> $categorie</option>";
                          }?> 
                       
                           <?php  foreach ($categories as $categorie):  ?>                            
                              <option value="<?php echo $categorie['id'] ?>"> 
                                <?php echo $categorie['designation'] ?>
                              </option>
                          <?php   
                          endforeach;
                          ?>
                        </select>
                      </div>
                                    <div class="form-group">
                           <label for="livre_categorie">Collection</label>
                        <select name="Collection" class="form-control" id="livre_categorie">                       
                          


                            <option value="<?php echo $edit_me['collections'] ?>" selected>  <?php echo $edit_me['collections'] ?>  </option>

                              <option value="Locale">Locale</option>
                              <option value="Locale">etrang??re</option>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="categorie_descript">Syth??se du livre</label>
                        <textarea name="synthese"  type="text" style="min-height:350px;" class="form-control" id="categorie_descript" placeholder="Desscription du livre"><?php if(isset($_POST['synthese'])){ $myvalue=$_POST['synthese'];?><?php echo $myvalue;}?> <?php if(!isset($_POST['synthese'])){?><?php echo $edit_me['synthese'];}?></textarea>
                      </div>  
        <div id="image_de_couverture" class="input-group col-xs-12 mb-3">   
   
            </div>
                   <div class="input-group col-xs-12 mb-3">
                          <input type="file" name="cover_img" id="img" accept="image/jpeg,image/jpg, image/png image/PNG,image/JPG, image/JPEG" onchange="getmyImageForPreview(event)"  class="form-control file-upload-info"  placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse  btn btn-default"  type="button" style="cursor:text;"> Png,Jpg,gif </button>
                          </span>
                        </div>
                          
                      <button type="submit" name="update_livre" class="btn btn-primary col-12"> Enregistrer </button>
                    
                    </form>
                  </div>
                </div>
              </div>           
            <div class="col-md-2 grid-margin    mt-2">
              <img src="Views/uploads-images/nos_livres/<?php echo $edit_me['couverture'];?>" class="" width="289px" alt="image" /> 
            </div>
            </div>
         <?php           
         }
         elseif(empty($updatble)){
          notification("danger","aucune publication ne correspond ?? votre recherche");
         }
      }
      elseif(!is_int($id)){      
        notification("danger","aucun resultat n'a et?? trouv??");
      }      
    }
    else{
                      
 
 

                ?> 
    <div class="row justify-content-center br-40 mt-2" style="">
      <?php 
      
          if(isset($_POST['add_livre'])){
                               add_on_libr(); 
                              // notification("danger","bien capt??");                                                
                      }    
      ?>
              <div class="col-md-8 grid-margin stretch-card   mt-2">
                <div class="card">
                  <div class="card-body">
                    <h3 class="">Ajouter</h3>
                    <p class="card-description">Un nouveaux livre ? ...</p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="livre_title">Un titre pour le nouveau livre</label>
                        <input type="text" name="titre" <?php if(isset($_POST['titre'])){ $myvalue=$_POST['titre'];?>value="<?php echo $myvalue ;} ?>" class="form-control" id="livre_title" placeholder="titre">
                        <div id="livre_titre_ajax">   

                       </div>
                      </div>
                      <div class="form-group">
                        <label for="livre_auteur">Auteur du livre</label>
                        <input type="text" name="auteur" <?php if(isset($_POST['auteur'])){ $myvalue=$_POST['auteur'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="livre_auteur" placeholder="auteur">
                      </div>
                      <div class="form-group">
                        <label for="exemplaires ">Nombre d'xemplaires </label>
                        <input type="number" name="exemplaires" <?php if(isset($_POST['exemplaires'])){ $myvalue=$_POST['exemplaires'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="exemplaires" placeholder="nombres exemplaires">
                      </div>

                      <div class="form-group">
                        <label for="livre_auteur">Maison d'??dition</label>
                        <input type="text" name="maison_d_edition" <?php if(isset($_POST['maison_d_edition'])){ $myvalue=$_POST['maison_d_edition'];?>value="<?php echo $myvalue ;} ?>"  class="form-control" id="maison_d_edition" placeholder="maison d'??dition">
                      </div>
                       <div class="form-group">
                           <label for="livre_categorie">categotie</label>
                        <select name="categorie" class="form-control" id="livre_categorie">


                          <?php if(isset($_POST['categorie'])){ 
                            $myvalue=$_POST['categorie'];
                              if (!empty($myvalue)) {                              
                            ?>
                            <option value="" selected> Concerver la categorie choisie... </option>
                             <?php 
                             }elseif(empty($myvalue)){
                                                            
                            ?>
                            <option value="" selected> choisir une categorie... </option>
                             <?php                       
                             }           
                          } 
                          else if (!isset($_POST['categorie'])) {
                           echo" <option value='' selected> choisir une ... </option>";
                          }?> 
                       
                           <?php  foreach ($categories as $categorie):  ?>                            
                              <option value="<?php echo $categorie['id'] ?>"> 
                                <?php echo $categorie['designation'] ?>
                              </option>
                          <?php   
                          endforeach;
                          ?>
                        </select>
                      </div>


                      <div class="form-group">
                           <label for="livre_categorie">Collection</label>
                        <select name="Collection" class="form-control" id="livre_categorie">


                          <?php if(isset($_POST['Collection'])){ 
                            $myvalue=$_POST['Collection'];
                              if (!empty($myvalue)) {                              
                            ?>
                            <option value="<?php echo $myvalue ?>" selected> <?php echo $myvalue ?> </option>
                             <?php 
                             }elseif(empty($myvalue)){
                                                            
                            ?>
                            <option value="" selected> choisir une collection... </option>
                             <?php                       
                             }           
                          } 
                          else if (!isset($_POST['Collection'])) {
                           echo" <option value='' selected> choisir une ... </option>";
                          }?> 
                          <option value='Locale' > Locale </option>
                          <option value='entrang??re' >entrang??re  </option>
                         
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="categorie_descript">Synth??se du livre</label>
                        <textarea name="synthese"  type="text" style="min-height:350px;" class="form-control" id="categorie_descript" placeholder="Synth??se du livre"><?php if(isset($_POST['synthese'])){ $myvalue=$_POST['synthese']; echo $myvalue ;} ?></textarea>
                      </div>  
                     <div id="image_de_couverture" class="input-group col-xs-12 mb-3">   
   
            </div>
                   <div class="input-group col-xs-12 mb-3" style="padding-bottom:;">
                    
                          <input id="img" accept="image/jpeg,image/jpg, image/png image/PNG,image/JPG, image/JPEG" onchange="getmyImageForPreview(event)"  type="file" name="cover_img"  class="form-control file-upload-info"  placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse  btn btn-default"  type="button" style="cursor:text;"> Png,Jpg,gif </button>
                          </span>
                        </div>
                      <button type="submit" name="add_livre" class="btn btn-primary col-12"> Enregistrer </button>
                            


                    
                    </form>
                  </div>
                </div>
              </div> 

          


            </div>
            
            


           

<?php 
    }
    
?>





























                
  







      


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? bootstrapdash.com
              2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from
              Bootstrapdash.com</span>
          </div>

          <div>
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed By: <a
                href="https://themewagon.com/" target="_blank">Themewagon</a></span>
          </div>
        </footer> -->


        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

<?php require "Views/admin/mydash/includes/js.php" ?>
</body>

</html>