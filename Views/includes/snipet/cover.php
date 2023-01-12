  <?php
       require "Views/includes/snipet/main_nav_bar.php";
  ?>
  <?php

      function cover($titre,$legende,$background_img,$subcolor_color=null,){
        
        echo"        
          <div id='mycover_container'  style='background-image: url($background_img);'>                    
              <div id='mycover_containt' style='background-image: url();'>         
                  <h1 id='cover_title'>$titre</h1>
              <span>$legende</span>   
              </div>
          </div>";
          
      }

  ?>

