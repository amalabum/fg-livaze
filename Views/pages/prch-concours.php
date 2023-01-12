
<!DOCTYPE html>
<html lang="en">
 <?php
                    require "Views/includes/head.php";
?>
<style>

body{background:#fafafa} 
.person{text-align: center;background: #fff;box-shadow: 0 0 9px 0 #0000001a}
.person:hover .personimg:before {
    opacity: 0;
    transition: all 0.4s linear;
}
.person p {margin: 0}
.personimg {position: relative;width: 100%}
.personimg img {width:100%}
.personimg:before{
    opacity: 1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, #005e9694, rgb(181 181 181 / 0%))
}

.persondetail {position: relative;margin-top: 10px}
.persondetail:before{
    content: "";
    position: absolute;
    width: 100%;
    height: 24px;
    top: -24px;
    left: 0;
    right: 0;
    background-color: #FFF;
    z-index: 5;
    transform: skewY(-3deg);
}
.persondetail p.personunvan {font-weight: 600; font-size: 15px;color: #000}
.persondetail p.persontitle {font-size: 13px;color: #666;margin: 5px 0}
.personcontact {
    border-top: 1px solid #eee;
    padding-top: 7px;
    color: #676767;
    font-size: 13px;
}
.personcontact p.personemail{}
.personcontact p.persontelefon{padding-top: 7px}
.personcontact p.personCV {margin-top: 10px}
.personcontact p.personCV a{
    width: 100%;
    background: #f0f0f0;
    border-radius: 0;
    border-top: 2px solid #eaeaea;
    font-size: 13px;
    font-weight: 600;
    color: #989898;
}
.person:hover .personCV a {
    background: #be3f48;
    color: #fff;
    border-top: 2px solid #902e35;
    transition: all 0.4s;
}

@media screen and (max-width: 991.98px) {
  .mobilmt{margin-top:50px}
  .persondetail:before {height: 34px;top: -30px}
}

</style>
<body style=" background-color: #FFFFFF;">
    <?php
       require "Views/includes/snipet/main_nav_bar.php";
    ?>

        <div class="row subcover d-none">

          <div class="logo col-3">

            <img src="logo.png" alt="" width="250px">
          </div>

          <div class="menu col-6 ">




            <nav
              class="navbar navbar-example navbar-expand-lg container-xl d-flex flex-wrap  py-2 flex-md-row flex-column">
              <div class=" container-fluid justify-content-between">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-2"
                  aria-controls="navbar-ex-2" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-ex-2">
                  <div class="navbar-nav me-auto">
                    <a class="nav-item nav-link" href="javascript:void(0)">Acceuil</a>
                    <a class="nav-item nav-link" href="javascript:void(0)">Apropos</a>
                    <a class="nav-item nav-link" href="javascript:void(0)">Soirée literaire</a>
                    <a class="nav-item nav-link" href="javascript:void(0)">Blog</a>
                    <a class="nav-item nav-link" href="javascript:void(0)">Nos collections</a>
                    <a class="nav-item nav-link" href="javascript:void(0)">Contact</a>
                  </div>

                  <!-- <span class="navbar-text">Marshmallow brownie lemon drops cheesecake.</span> -->
                </div>
              </div>
            </nav>
          </div>

          <div class="abonnees col-2">
            + 300 Abonnées
          </div>

        </div>
         <?php
        //require "Views/includes/snipet/laisservousguider.php";
?>
      </div>
      </div>
    </div>   <div class="TitleOfSection" style="text-align:center; margin-bottom:40px; padding-top:130px; color:#000000;">


<h1 style="font-size: 45px;
    font-weight: 900;

    color: #1B1B1B;
    margin: 0px 0;">Concours Etudiant </h1>

    <span class=" page-subtitle" style="
  font-weight: 500;
    font-size: 13px;
    margin: 0;
    margin-top: 0px;
 
    text-transform: uppercase;
    color: color: #1B1B1B;">
      La lecture est votre passion ?
    </span>
     
    </div>
   <div class="relative_bloc  soiree_liter pt-4 mb-5 row" style="margin-top:120px; font-family:Georgia, Times, serif !important;">   
   

          <div class="col-md-12 col-sm-12 col-lg-12 srl_cover">
            <img src="Views/assets/covers/cv.png" alt="">
            <div class="row side1" >              
              <div class="col-12 title">
                1ere édition <br>
                Jeudi 28 janvier 2023</div>
              <div class="col-12 legende"></div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-lg-12 srl_details">
            
              <span class="blog-slider__code"> </span>
        <div class="blog-slider__title" style="font-family:Georgia, Times, serif !important;margin-top:-20px;">Auteur : ANNE BEREST  <br> <h5 style="margin-top:-5px;font-family:Georgia, Times, serif !important;"> romancière dramaturge, scénariste de série et actrice.</h5 style="margin-top:-10px;">Livre : LA CARTA POSTALA </div>  
       <div>
              <?php
       $descript="Le mystère de cette carte restera entier jusqu’à ce que 15 ans plus tard Anne Berest se lance dans une longue enquête qui aboutira à ce livre, magnifique et bouleversante immersion dans l’histoire de cette famille décimée pour une partie d’entre elle dans les camps d’extermination.



Nous évoquerons l'univers extraordinaire de cette magnifique et sensible autrice à la lumière de certains de ses ouvrages notables afin de mettre en exergue le spectre romanesque et littéraire exceptionnel de cette dernière. Nous évoquerons également avec elle son rapport à l'écriture, à la littérature, l’histoire et les secrets de familles. 



N'hésitez pas à lire le dernier livre d'Anne Berest, La carte postale, disponibles dans nos collections afin que nous puissions échanger avec elle de façon interactive et nourricière, cependant ce n'est pas un pré-requis. 

";

echo $descript;



       ?>
 </div>          
<div>
  
  <div class="card-foot row" >
    <div class="col-6 row d-none">
<div class="col-3"> <img src="Views/assets/covers/fb.png" alt="" ></div> 
<div class="col-9">
<div class="col-12 title pt-1" >
                Fidel BASHIGE
                </div>
              <div class="col-12 legende" style="font-size:10px;">+243 (0) 974 242 040 </div>

</div> 
  
  </div>
    <div class="col-6 justify-cotent-end" s>
   <a href="#" class="blog-slider__button" style="width:100%;text-decoration:none;color:white;font-family:Georgia, Times, serif !important;">Postuler</a>
     
    </div>
  </div>
<!-- <div class="row side1" >              
              <div class="col-12 title">
                1ere édition <br>
                Jeudi 28 janvier 2023</div>
              <div class="col-12 legende"></div>
            </div>   -->

</div> 

            </p>

          </div>

   </div>













   </div>


<!-- 
<div class="container my-5 col-7">
                    <div class="row">
<div class='wrapper' style="osition:relative; height:300px;">
  <div class='carousel' style="width:600px;">
    <div class='carousel__item'>
      <div class='carousel__item-head' id="img-bloc-invite" >
        <img src="../invites/2.jpg" alt="" >
      </div>
      <div class='carousel__item-body'>
        <p class='title'>PASSY MUBALAMA</p>
        <p>Maitre avocat</p>
      </div>
    </div>
    <div class='carousel__item'>
      <div class='carousel__item-head' id="img-bloc-invite">
          <img src="../invites/1.jpg" alt="" >
      </div>
      <div class='carousel__item-body'>
        <p class='title'>ILUNGA ASUMTA</p>
        <p>Auteur économiste</p>
      </div>
    </div>
    <div class='carousel__item'>
      <div class='carousel__item-head' id="img-bloc-invite">
        <img src="../invites/3.jpg" alt="" >
      </div>
      <div class='carousel__item-body' id="img-bloc-invite">
        <p class='title'>JOEL MATOKA</p>
        <p>Professeur chimiste</p>
      </div>
    </div>
    <div class='carousel__item'>
    <div class='carousel__item-head' id="img-bloc-invite">
        <img src="../invites/4.jpg" alt="" >
      </div>
      <div class='carousel__item-body'>
        <p class='title'>KASONGO ELIEZER</p>
        <p>DEVELOPPEUR WEB</p>
      </div>
    </div>
  
   
  </div>
</div> -->

                        <!-- <div class="col-12 col-lg-4 mobilmt">
                            <div class="person">
                                <div class="personimg">
                                    <img src="https://images.unsplash.com/photo-1442458370899-ae20e367c5d8?auto=format&fit=crop&w=1267&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
                                </div>
                                <div class="persondetail">
                                    <p class="personunvan">PROFESSEUR D'ECONOMIE</p>
                                    <p class="persontitle">Joy Gloire</p>
                                </div>
                                <div class="personcontact">
                                    <p class="personemail"><i class="fas fa-envelope-open-text"></i> johnteyze@mail.com</p>
                                    <p class="personCV">
                                        <a href="" class="btn" src="">Contacts</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mobilmt">
                            <div class="person">
                                <div class="personimg">
                                    <img src="https://images.unsplash.com/photo-1442458370899-ae20e367c5d8?auto=format&fit=crop&w=1267&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
                                </div>
                                <div class="persondetail">
                                    <p class="personunvan">AUTEUR</p>
                                    <p class="persontitle">Alain sounzou</p>
                                </div>
                                <div class="personcontact">
                                    <p class="personemail"><i class="fas fa-envelope-open-text"></i> johnteyze@mail.com</p>
                                  <p class="personCV">
                                        <a href="" class="btn" src="">Contacts</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 mobilmt">
                            <div class="person">
                                <div class="personimg">
                                    <img src="https://images.unsplash.com/photo-1442458370899-ae20e367c5d8?auto=format&fit=crop&w=1267&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
                                </div>
                                <div class="persondetail">
                                    <p class="personunvan">SPECIALISTE EN DROIT</p>
                                    <p class="persontitle">JOHN TEYZE</p>
                                </div>
                                <div class="personcontact">
                                    <p class="personemail"><i class="fas fa-envelope-open-text"></i> johnteyze@mail.com</p>

                                    <p class="personCV">
                                        <a href="" class="btn" src="">contact</a>
                                    </p>
                                </div>
                            </div>
                        </div> -->
                      </div>
                    </div>
 <?php
                    require "Views/includes/footer.php";
?> 

 <?php
                    require "Views/includes/js.php";
?>          

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
</script>
</body>
</html>




















 

 