  <?php
       require "Views/includes/snipet/main_nav_bar.php";

  ?>
  <?php

      function cover($titre,$legende,$background_img,$subcolor_color=null,){
        
        echo"        
          <div id='mycover_container'  style='background-image: url($background_img);'>                    
              <div id='mycover_containt' style='background-image: url();'>         
                <h1 id='cover_title'>        
                  $titre
                </h1>
                <span>";  ?>   

              <?php //echo trim($legende);

              if(empty(trim($legende))) {

                  require "Views/admin/mydash/cores/db.php"; 
                  $recup_5_livres= $db->query("SELECT * FROM livres  ");
                  while ($all_datas_5= $recup_5_livres->fetch()){
                  $cinq_livres[]=$all_datas_5;
              }
                echo"<div class='customer-books slider container-fuid  row' style=''>";      
               
                 foreach ($cinq_livres as $livre):          
                  ?>
                <!-- <a style="text-decoration:none;color:#000000;" href="details-livre?livreaconsulter=<?php //echo $livre['id'] ?>">
                 -->
                    <div class='col-3 slide'>
                       <div class='collectionExtract-cards'>
                       <div class='imagecover'>
                         <img src="Views/uploads-images/nos_livres/<?php echo $livre['couverture'];?>" height="100%" style="width:170px;" alt='Sample Article'>
                        </div>
                       </div>
                    </div>
            
            
          
         <!-- </a> -->
          
              <?php 
               
            
               endforeach;    
      
     echo "   </div> ";
              }
              else
                echo "$legende";
              
              
              
              ?>
              
              <?php
              echo" </span>   
              </div>
          </div>";
          
      }

  ?>







<!-- <div class='customer-books slider container-fuid  row' style=''>
     
      <div class='col-3 slide'>
          <div class='collectionExtract-cards'>
        <div class='imagecover'>
          <img src='Views/assets/covers/E.png' width='100%' alt='Sample Article'>
        </div>
        
      </div>
      </div>
      <div class='col-3 slide'>
          <div class='collectionExtract-cards'>
        <div class='imagecover'>
          <img src='Views/uploads-images/livres/topvendu/2.png' width='100%' alt='Sample Article'>
        </div>
        
      </div>
      </div>
      <div class='col-3 slide'>
      <div class='collectionExtract-cards'>
        <div class='imagecover'>
          <img src='Views/assets/covers/D.png' width='100%' alt='Sample Article'>
        </div>
        
      </div>
      </div><div class='col-3 slide'>
      <div class='collectionExtract-cards'>
        <div class='imagecover'>
          <img src='Views/assets/covers/B.png' width='100%' alt='Sample Article'>
        </div>
        
      </div>
      </div>
      <div class='col-3 slide'>
      <div class='collectionExtract-cards'>
        <div class='imagecover'>
          <img src='Views/assets/covers/A.png' width='100%' alt='Sample Article'>
        </div>
        
      </div>
      </div>
  <div class='col-3 slide'>
          <div class='collectionExtract-cards'>
        <div class='imagecover'>
          <img src='Views/assets/covers/C.png' width='100%' alt='Sample Article'>
        </div>
        
      </div>
      </div>
      
       </div> -->
      