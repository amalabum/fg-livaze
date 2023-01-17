<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
?>
<style>
  @media only screen and (max-width: 1080px) {
  .container {
    flex-direction: column;
  }

  .element {
    margin: 20px 0;
  }

  .element:nth-of-type(2) {
    transform: scale(1);
  }

  .element ul {
    display: flex;
    justify-content: space-around;
    margin: 0 20px;
    text-align: center;
    flex-wrap: wrap;
  }

  .period {
    flex-wrap: wrap;
  }
}
</style>

<body >
	<div id="livraze_app" style="overflow-x:hidden;">

		<?php
     
      
      require "Views/includes/snipet/cover.php";
      cover("Profitez de l'abonnement","afin d'accéder à nos collections",'Views/assets/covers/8.png');

?>


<div class="" s>
  <section class="pricing-table" style="">
  <div class="container">

    <div class="element prix_1" >
      <div class="info" style="text-align:center;">
        
        <h3> <b> Etudiant </b></h3>
      <p>  vous pouvez accéder à la bibliothèque livraze pour une  <b>lecture de 2 ouvrages</b>  avec la possibilité d'emprunter 1 ouvrage pour une lecture à domicile </p>
       
      </div>
      <span class="price">4.6$/mois</span>
   
       <a href="s-abonner"><button class="btn_1">S'abonner</button></a>
    </div>
   <div class="element prix_2">
      <div class="info">
        <h3> <b>Premium </b></h3>
        <p>Vous pouvez acceder à la bibliothèque livraze pour une  <b>lecture de 5 ouvrages</b>  avec la possibilité d'emprunter 2 de ces 3 ouvrages pour une lecture à domicile <br> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires</p>
      </div>
      <span class="price">11,99$/mois</span>
   
       <a href="s-abonner"><button class="btn_2">S'abonner</button></a>
    </div>
    <div class="element prix_3" style="">
      <div class="info">
        <h3><b>Standard</b></h3>
        <p>vous pouvez acceder à la bibliothèque livraze pour une  <b>lecture de 3 ouvrages</b>  avec la possibilité d'emprunter 1 de ces 3 ouvrages pour une lecture à domicile</p>
      </div>
      <span class="price">9.99$/mois</span>
   
     
      <a href="s-abonner"><button class="btn_3">S'abonner</button></a>
    </div>



 
  </div>
</section>
</div>









		<div class="relative_bloc prix wd-60 d-none row mt-5">
			<div id="caption_way" class="">
				... 
			</div>
            <div class="our_price">  
              
             <div class="price_title" style="background:#35c1dd">Etudiant</div>
                <div class="description">
                   <div class="price_montant">4,6$/mois</div>
                   avec votre abonement etudiants :
               




                    <!-- <ul style="text-align:left;">
                    <li> vous pouvez accéder à la bibliothèque livraze pour une  <b>lecture de 2 ouvrages</b>  avec la possibilité d'emprunter 1 ouvrage pour une lecture à domicile
</li>
                    <li> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires mensuelles
               </li>
                 </ul>   -->
                 </div>
                  






          
                  
                   
            </div>
             <div class="our_price middle" style="background:#F1F1F1; ">
                 
 <div class="price_title " style="background:#ff8700;height:100px;">Standard </div>
                 <div class="description" style="padding:20px 30px;">
                  <div class="price_montant">9,99$/mois</div>                    
                    avec votre abonement  standard:

                    <ul style="text-align:left;">
                    <li> 
</li>
                    <li> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires
               </li>
                 </ul> 
                </div>
            </div>
             <div class="our_price">
                <div class="price_title">Premium </div> 
                <div class="description">
                   <div class="price_montant">40$/mois </div>
                    
                     Avec votre abonement  standard :
                    <ul style="text-align:left;">
                    <li> accedez à la bibliothèque Livraze pour une lecture 5 livres(dans un cadre de travail paisible avec la possibilité d'emporter au maximum <b>2 ouvrages</b> parmis vos 5 livres préfféré pour une lecture approfondie
</li>
                    <li> Profitez egalement de 50% de réduction sur le tarif de participation à nos soirées littéraires mensuelle
               </li>
                 </ul>  
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

<script>
//   const elements = document.querySelectorAll(".element");
// const periods = document.querySelectorAll('input[name="period"]');
// const premiumPrice = document.querySelector(".premium .price");

// function toggleActive(e) {
//   if (this.classList.contains("active")) return;
//   else {
//     elements.forEach((element) => element.classList.remove("active"));
//     this.classList.toggle("active");
//   }
// }

// elements.forEach((element) =>
//   element.addEventListener("mouseover", toggleActive)
// );
// periods.forEach((period) =>
//   period.addEventListener(
//     "change",
//     () => (premiumPrice.textContent = period.value)
//   )
// );

</script>
</body>

</html> 




