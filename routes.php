<?php

Routeur::get ("/",function (){
    require "Views/index.php";
});
Routeur::get ("/home",function (){
    require "Views/index.php";
});
Routeur::get ("/index.html",function (){
    require "Views/index.php";
});

Routeur::get ("/page-not-found",function (){
    require "Views/404.php";
});

Routeur::get ("/soiree-litteraire",function (){
    require "Views/pages/soiree-litteraire.php";
});
Routeur::get ("/concours-lecture",function (){
    require "Views/pages/prch-concours.php";
});


Routeur::get ("/oeuvres-locaux",function (){
    require "Views/pages/localcollection.php";
});

Routeur::get ("/oeuvres-internationaux",function (){
    require "Views/pages/oeuvres-internations.php";
});

Routeur::get ("/packages",function (){
    require "Views/pages/tarifs.php";
});

Routeur::get ("/apropos",function (){
    require "Views/pages/apropos.php";
});
Routeur::get ("/contact",function (){
    require "Views/pages/contact.php";
});






Routeur::get ("/présentation",function (){
    require "Views/pages/presentation-sr.php";
});
Routeur::get ("/partenaires",function (){
    require "Views/pages/partenariats.php";
});
Routeur::get ("/concours",function (){
    require "Views/pages/concours.php";
});


Routeur::get ("/details-livre",function (){
    require "Views/pages/detail_livre.php";
});

Routeur::get ("/soirees-precedentes",function (){
    require "Views/pages/soirees-precedentes.php";
});

// admin panel
Routeur::get ("/login",function (){
    require "Views/admin/mydash/login.php";
});
Routeur::get ("/dashboard",function (){
    require "Views/admin/mydash/index.php";
});



Routeur::get ("categories",function (){
    require "Views/admin/mydash/add_categorie.php";
});

Routeur::get ("/new-lib",function (){
    require "Views/admin/mydash/add_on_lib.php";
});
Routeur::get ("/admin-librairie",function (){
    require "Views/admin/mydash/librairie.php";
});

Routeur::get ("/abonement",function (){
    require "Views/admin/mydash/add_member.php";
});
Routeur::get ("/abonements",function (){
    require "Views/admin/mydash/our_members.php";
});


Routeur::get ("/s-abonner",function (){
    require "Views/pages/end-abonnement.php";
});
Routeur::get ("/resultats",function (){
    require "Views/pages/resultats.php";
});
?>


