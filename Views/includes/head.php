
<?php require "Views/admin/mydash/cores/db.php"; 
 $recup_d= $db->query("SELECT * FROM livres ORDER BY id DESC limit 4");
     while ($all_data= $recup_d->fetch()){
     $noslivres[]=$all_data;
     
  }
  
//  $recup_lib= $db->query("SELECT * FROM livres ORDER BY id DESC ");
//      while ($all_libs= $recup_lib->fetch()){
//      $livres_for_pagination_front_office[]=$all_libs;     
//   }






  $recup_ds= $db->query("SELECT * FROM livres ORDER BY id DESC ");
     while ($all_datas= $recup_ds->fetch()){
     $livres[]=$all_datas;     
  }
  $recup_categorie= $db->query("SELECT * FROM categorie ORDER BY id DESC ");
     while ($all_datas_l= $recup_categorie->fetch()){
     $categories[]=$all_datas_l;
     
  }
  $recup_categorie_actif= $db->query(" SELECT DISTINCT categorie FROM livres ORDER BY id DESC ");
     while ($all_datas_livre= $recup_categorie_actif->fetch()){
     $categories_actif[]=$all_datas_livre;
     
  }
   $recup_locals_collections= $db->query("SELECT * FROM livres where collections='Locale' ORDER BY id DESC ");
     while ($rlocals_collections= $recup_locals_collections->fetch()){
     $local_collections[]=$rlocals_collections;     
  }
  $recup_etrng_collections= $db->query("SELECT * FROM livres where collections='etrangere' ORDER BY id DESC ");
     while ($etrageres_collections= $recup_etrng_collections->fetch()){
     $collection_etragere[]=$etrageres_collections;     
  }
  
  $la_une= $db->query("SELECT * FROM livres ORDER by id Desc ");  
  $la_une_lb= $la_une->fetch();
  
 // recuperation des 5meilleurs livres
     $recup_5_livres= $db->query("SELECT * FROM livres limit 5 ");
     while ($all_datas_5= $recup_5_livres->fetch()){
     $cinq_livres[]=$all_datas_5;     
  }

?>

<head>
  <meta charset="utf-8">
   <title>Livraze.com</title>


<link rel="icon" type="image/x-icon" href="Views/assets/covers/logo.png" />
 <link rel="stylesheet" href="Views/assets/bootstrap/Bootstrap-selectv1.css">


<link rel="stylesheet" href="Views/assets/bootstrap/btstrap.min.css">
<link rel="stylesheet" href="Views/assets/css/bootstrap.min.css">  

<link rel="stylesheet" href="Views/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="Views/assets/sass/dart-sass/style.css">
  <link rel="stylesheet" href="Views/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="Views/assets/css/swipper.css">

  <style>

    .categorie_div{
      margin:1em !important;
      color: #1B1B1B !important;
      border-radius:40px !important;
      background:transparent;
      border :1px Solid #D8D8D8 !important;

      /* font-family: 'lato' !important; */
    }
  
  /* body{background:#fafafa} */
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
/* multiselect */
hr {
  clear: both;
  margin: -7px 0 15px;
}

div.wrapper {
  padding: 20px 10px;
}

div.intro {
  padding-left: 40px;
}

p.desc {
  float: left;
  text-align: right;
  width: 200px;
  padding: 5px 15px 0 0;
  font-weight: 900;
}


</style>
</head>
