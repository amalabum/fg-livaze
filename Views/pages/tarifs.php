<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
?>

<body>
	<div id="livraze_app">

		<?php
     
      
      require "Views/includes/snipet/cover.php";
      cover("Nos prix","les meilleurs prix de la place",'Views/assets/covers/8.png');

?>

		<div class="relative_bloc prix wd-70 row mt-5">
			<div id="caption_way" class="">
				... 
			</div>
            <div class="our_price">  
              
             <div class="price_title" style="background:#35c1dd">Etudiant</div>
                <div class="description">
                   <div class="price_montant">4,6$/mois</div>
                   avec votre abonement etudiants :
               




                    <ul style="text-align:left;">
                    <li> vous pouvez acceder à la bibliothèque livraze pour une  <b>lecture de 2 ouvrages</b>  avec la possibilité d'emprunter 1 ouvrage pour une lecture à domicile
</li>
                    <li> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires mensuelles
               </li>
                 </ul>  <br>
               <a href="s-abonner?hhhheivdnjdvdv=<?php echo "premium"?>"> <button class="btn btn-info">S'abonner</button></a>
                 </div>
                  






          
                  
                   
            </div>
             <div class="our_price" style="width:320px;margin-top:-10px; background:#F1F1F1;">
                 
 <div class="price_title " style="background:#ff8700;height:100px;">Standard </div>
                 <div class="description" style="padding:20px 30px;">
                  <div class="price_montant">9,99$/mois</div>                    
                    avec votre abonement  standard:

                    <ul style="text-align:left;">
                    <li> vous pouvez acceder à la bibliothèque livraze pour une  <b>lecture de 3 ouvrages</b>  avec la possibilité d'emprunter un de ces 3 ouvrages pour une lecture à domicile
</li>
                    <li> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires
               </li>
                 </ul> 
                 
                 <a href="s-abonner?hhhheivdnjdvdv=<?php echo "standard"?>"> <button class="btn btn-success">S'abonner</button></a>
               </div>
            </div>
             <div class="our_price">
                <div class="price_title">Premium </div> 
                <div class="description">
                   <div class="price_montant">40$/mois </div>
                    
                     avec votre abonement  standard :
                    <ul style="text-align:left;">
                    <li> accedez à la bibliothèque Livraze pour une lecture 5 livres(dans un cadre de travail paisible avec la possibilité d'emporter au maximum <b>2 ouvrages</b> parmis vos 5 livres préfféré pour une lecture approfondie
</li>
                    <li> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires mensuelle
               </li>
                 </ul>  <br>
                  <a href="s-abonner?hhhheivdnjdvdv=<?php echo "etudiant"?>"> <button class="btn btn-info">S'abonner</button></a>
                 </div>
                
            </div>
			
		   	 

        </div>  
    
        
	
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




