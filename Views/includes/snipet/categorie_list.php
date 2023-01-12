<ul>
  
   <?php foreach ($categories_actif as $categorie):   
    
                            $id=$categorie['categorie'];    
                            $toutes_categorie= $db->query("SELECT *  FROM categorie WHERE id='".$id."'");                                
                                 while ($all_classed_livre= $toutes_categorie->fetch()){
                                 $categories_classee[]=$all_classed_livre;     
                            }
                          
    ?>                           

  
  <?php endforeach;  
 
  foreach ($categories_classee as $categorie_avec_article): 
  ?>
   <a  style="font-size:12px;border:none;" class="mes_liens" href="oeuvres-internationaux?bycategorie=<?php echo $categorie_avec_article['id']; ?>&bycategoriename=<?php echo $categorie_avec_article['designation']; ?>"> <li><?php echo $categorie_avec_article['designation'] ?></li></button> </a>
 
  <?php endforeach;   ?>

</ul>