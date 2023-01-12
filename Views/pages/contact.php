<!DOCTYPE html>
<html lang="">

<?php
 require "Views/includes/head.php";
?>

<body>
	<div id="livraze_app">

		<?php
    
      
      require "Views/includes/snipet/cover.php";
      cover("Contact","TOUJOURS À VOTRE DISPOSITION",'Views/assets/covers/web-cover/2.png');

?>

		<div class="relative_bloc custum_container wd-60 row mt-5" >
			<div id="caption_way" class="">
				contact@livraze.com
			</div>
			<div class="col-md-6 col-sm-12 col-lg-6" id="contact_infos" style="font-size:1.2em !important; "  >
				
				
					
Livraze est une bibliothèque privée de l'agence de communication globale Fidba Graphics. Avec des collections variées dans tous les domaines qui intéressent ses abonnés
				
				<p>
					<p class="mt-5">
						Adresse : 136, La frontière Avenue.
                 KATINDO, GOMA RDC 	<p>
					Télephone : <span class="bold">+243 (0) 974 242 040</span> <br>
					Email: <span class="bold">contact@fidbagraphics.com</span>
					
				
				
				
				</p>
			</div>
			<div class="ol-md-6 col-sm-12 col-lg-6">

						
						
							<div class="form-group">
								<label>Nom &amp; post-nom <span class="required"></span></label>
								<input type="text" class="form-control contact_nom" name="contact_nom" required
									placeholder="ex : eliezer ">
							</div>
						

							<div class="row ">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nom &amp; post-nom <span class="required"></span></label>
										<input type="text" class="form-control contact_nom" name="contact_nom"
											required="" placeholder="ex : kasongo eliézer ">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Adresse mail <span class="required"></span></label>
										<input type="email" class="form-control contact_email" name="contact_email"
											required="" placeholder="eliezerk58@gmail.com">
									</div>
								</div>
							</div>
							
							<div class="row ">

							<div class="col-md-12">
								<div class="form-group">
									<label>Objet</label>
									<input type="text" class="form-control contact_objet" name="contact_objet" focus=""
										placeholder="Objet">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Votre message <span class="required"></span></label>
									<textarea class="form-control contact_message" name="contact_message"
										style="min-height:130px;max-height:200px; max-width:100%;min-width:80%;"
										required="" placeholder="Veuillez ici votre message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="hidden" id="gg_recaptcha" name="g_recaptcha">
								</div>
							</div>
                           </div>
						

							<div class="col-md-12">


								<button class="call_to_action btn " id="contact"> Envoyer le mail</button>
							</div>
						</form>
					</div>
				</div>
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