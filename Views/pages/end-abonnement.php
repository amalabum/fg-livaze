 <?php require "Views/admin/mydash/cores/new_register.php"; ?>
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <title></title>

  <link rel="stylesheet" href="Views/assets/bootstrap/Bootstrap-selectv1.css">

<link rel="icon" type="image/x-icon" href="Views/assets/covers/logo.png" />
  <link rel="stylesheet" href="Views/assets/bootstrap/btstrap.min.css">
  <link rel="stylesheet" href="Views/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="Views/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="Views/assets/sass/dart-sass/style.css">
  <link rel="stylesheet" href="Views/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="Views/assets/css/swipper.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
  <title>fg | Livraze</title> 
  <style>

.intl-tel-input {
  display: table-cell;
}
.intl-tel-input .selected-flag {
  z-index: 4;
}
.intl-tel-input .country-list {
  z-index: 5;
}
.input-group .intl-tel-input .contact {
  border-top-left-radius: 4px;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
}
  </style>
</head>

<body>
  <div id="livraze_app">

    <div id="livrazenav">
      <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid ">

          <a class="navbar-brand" href="home" style="position: absolute;padding-top:20px;"><img
              src="Views/assets/covers/logo.png" alt="" height="200px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div style="position:relative;">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-1" style="position:relative;width:100% !important;">
                <li class="nav-item">
                <li><a id="menu_item" class="nav-item nav-link" href="home"> Acceuil

                  </a>
                </li>
                </li>
                <li class="nav-item dropdown">
                  <a id="menu_item" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Soirée litteraire
                  </a>
                  <ul class="dropdown-menu" style="border-radius:5px;">
                    <li><a id="menu_item" class="nav-item nav-link"
                        style="padding-left:10px; border-bottom:1px solid #C8C8C8;" href="présentation">
                        Présentation </a></li>

                    <li><a id="menu_item" style="padding-left:10px;"
                        class="nav-item nav-link" href="soiree-litteraire"> Procahine Soirée</a></li>
                    <li class="d-none"><a id="menu_item" style="padding-left:10px;width:200px;" class="nav-item nav-link"
                        href="oeuvres-internationaux">
                        Soirées Précedentes</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a id="menu_item" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Nos
                    collections</span>
                  </a>
                  <ul class="dropdown-menu" style="border-radius:5px;">
                    <li class="drop_menu"><a id="menu_item" class="nav-item nav-link"
                        style="padding-left:10px; " href="oeuvres-locaux">
                        Locale</a></li>

                    <li><a id="menu_item" class=" drop_menunav-item nav-link" href="oeuvres-internationaux"
                        style="padding-left:10px;">
                        Internationale</a></li>
                  </ul>
                </li>
                <li class="nav-item ">
                  <a id="menu_item" class="drop_menu nav-item nav-link" href=""> </a>
                </li>

                <li class="nav-item">
                  <a id="menu_item" style="" class="nav-item nav-link" href="concours"> Concours</a>
                </li>
                </li>
                <li class="nav-item">
                  <a id="menu_item" class="nav-item nav-link" href="partenaires"> partenaires</a>
                </li>

                <li class="nav-item">
                  <a id="menu_item" class="nav-item nav-link" href="contact"> contact </a>
                </li>
              </ul>
            </div>
            <form class="search" method="get" action="resultats" autocomplete="off">
              <div class="form-group">
                <div class="input-group mt-2">
                  <input type="text" name="keyword" class="form-control" placeholder="Mots clés..."
                    style="border-radius:40px 0px 0px 40px;">
                  <div class="input-group-btn">
                    <button class="btn btn-danger"
                      style="font-weight:bold;padding-top:10px; width:100px;border-radius:0px 40px 40px 0px;"><i
                        class="ion-search"></i>
                      <h6>Chercher</h6>
                    </button>
                  </div>
                </div>



              </div>


            </form>
          </div>
        </div>
      </nav>
    </div>




    <div id='mycover_container' style='background-image: url(Views/assets/covers/web-cover/2.png);'>
      <div id='mycover_containt' style='background-image: url();'>
        <h1 id='cover_title'>abonement</h1>
        <span>TOUJOURS À VOTRE DISPOSITION</span>
      </div>
    </div>

<form action="" method="post">

    <div class="relative_bloc  custum_container justify-content-center col-4 row mt-5 mb-5" style="border:1px solid #F7F7F7 ;">
     
    
      <div class="col-md-12 col-sm-12">
       
        <div class="mb-1">
          <label class="form-label" for="basic-default-fullname">Nom complet <span class="required_input">*</span></label>
          <input value="eliezer dev"  <?php if(isset($_POST['noms'])){ $myvalue=$_POST['noms'];?>value="<?php echo $myvalue ;} ?>"  name ="noms" type="text" class="form-control" id="basic-default-fullname"
            placeholder="ex : Juliene mbapa" required>
        </div>
        
        <div class="mb-1">
          <label class="form-label " for="basic-default-company">Adresse Physique <span class="required_input">*</span> </label>
          <input value="Goma"  <?php if(isset($_POST['adresse_phy'])){ $myvalue=$_POST['adresse_phy'];?>value="<?php echo $myvalue ;} ?>" name="adresse_phy" type="text" class="form-control bd_re " id="basic-default-company"
            placeholder="ex C. goma, Q. le volcan, Av. pelican N° 89" required >
        </div>   
           <div class="mb-1">
           <label class="form-label" for="basic-default-email">Email <span class="required_input">*</span></label>
                <div class="input-group input-group-merge">
                  <input value="elizer@gmail.com"  <?php if(isset($_POST['email'])){ $myvalue=$_POST['email'];?>value="<?php echo $myvalue ;} ?>" name="email" type="text" id="basic-default-email email_p " class="form-control" placeholder="mon-nom@gmail.com"
                    aria-label="john.doe" aria-describedby="basic-default-email2" required>
                  <span class="input-group-text" id="basic-default-email2">@example.com</span>
                </div>
                <div class="form-text">Vous pouvez utiliser les chiffres et le caracteres</div>
              </div>
          <div class="input-group mt-2 mb-1">
    <input <?php if(isset($_POST['telephone'])){ $myvalue=$_POST['telephone'];?>value="<?php echo $myvalue ;} ?>" name="telephone" type="text" class=" " required>
    <span class="" style="background:#D9D9D9;padding :8px 43px">télephone</span>
  </div>

          <div class=" mt-2 mb-0 row ">
            <label class="form-label" for="">Préferences</label>
            <div class="col-4" style="">

              <div class="form-check ">
                <input name="prefrnce[]" class="form-check-input" type="checkbox" value="Droit" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">Droit </label>
              </div>
              <div class="form-check">
                <input name="prefrnce[]" class="form-check-input" type="checkbox" value="economie" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">economie </label>
              </div>

            </div>
            <div class="col-4">
                

              <div class="form-check">
                <input name="prefrnce[]" class="form-check-input" type="checkbox" value="Science" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">Science </label>
              </div>
              <div class="form-check">
                <input name="prefrnce[]" class="form-check-input" type="checkbox" value="motivations" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">motivations</label>
              </div>

            </div>
            <div class="col-4">

              <div class="form-check">
                <input name="prefrnce[]" class="form-check-input" type="checkbox" value="technologie" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">technologie </label>
              </div>
              <div class="form-check">
                <input name="prefrnce[]" class="form-check-input" type="checkbox" value="romans" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">romans </label>
              </div>
                          <div class="form-check">
                <input name="prefrnce[]" class="form-check-input" checked hidden type="checkbox" value="default" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault"> </label>
              </div>
              

            </div>
          </div>


        
      </div>

      <div class=" mt-0 mb-0" style="text-align:center;">


<br>
     <?php require "Views/admin/mydash/cores/new_register.php"; ?>

        <button name="new_member" type="submit" class="btn btn-success nom-residence col-12 mt-0"
          style="">Envoyer</button>


      <div class="col-md-12 col-sm-12 mt-12 ">

          <div class="mb-1">
          <label class="form-label" for="otp">Entrez le code OPT envoyé par sms <span class="required_input">*</span></label>
          <input <?php if(isset($_POST['otp'])){ $myvalue=$_POST['otp'];?>value="<?php echo $myvalue ;} ?>"  name ="otp" type="text" class="form-control" id="otp"
            placeholder="00XXXXXXXXXX">
        </div>
         <button name="ver" type="submit" class="btn btn-success nom-residence col-12 mt-0"
          style="">Verifier le code OTP </button>

      </div>




       
      </div>
    </div>

    </form>

    <h2 class="d-none">Nos partenaires</h2>
    <section class="customer-logos slider container mb-5 d-none">
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>
      <div class="slide"><img src="Views/assets/partenaires/part.png"></div>

    </section>

    <?php
                    require "Views/includes/footer.php";
                   
?>
  </div>

  </div>




  <?php
                    require "Views/includes/js.php";
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
<script>
$(".contact").intlTelInput({
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
});
</script>
</body>

</html>