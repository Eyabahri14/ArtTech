<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:35 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Greendash Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Greendash styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

  <style type="text/css">
  input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
  </style>

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ">



  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html"> <img src="assets/img/dashboard/logo.png" alt="logo"> </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="index.html">SEFRIM</a> </li>


        </ul>
      </li>
      <!-- /Dashboard -->
    
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Client-page" aria-expanded="false" aria-controls="Client-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des clients</span>
        </a>
        <ul id="Client-page" class="collapse" aria-labelledby="Client-page" data-parent="#side-nav-accordion">
          <li> <a href="AfficherClient.php">Afficher Les Client</a> </li>
        </ul>
      </li>
      <!-- gestion des produits/categories -->

      <!-- gestion des produits-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Produit-page" aria-expanded="false" aria-controls="Produit-page">
         <span><i class='fas fa-apple-alt' style='font-size:16px;color:white'></i>Gestion Des Produits</span>
        </a>
        <ul id="Produit-page" class="collapse" aria-labelledby="Produit-page" data-parent="#side-nav-accordion">
           <li> <a href="AjoutProduit.php">Ajouter Un Produit</a> </li>
           <li> <a href="AfficherProduit.php"> Afficher les Produit</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de produit-->

      <!-- gestion des categories-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Categorie-page" aria-expanded="false" aria-controls="Categorie-page">
          <span><i class='far fa-clipboard' style='font-size:18px;color:white'></i>Gestion Des Catégories</span>
        </a>
        <ul id="Categorie-page" class="collapse" aria-labelledby="Categorie-page" data-parent="#side-nav-accordion">
          <li> <a href="AjoutCategorie.php">Ajouter Une catégories</a> </li>
          <li> <a href="AfficherCategorie.php"> Afficher les Catégories</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de categries-->

      <!-- gestion de panier/commande -->

      <!-- gestion panier -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Panier-page" aria-expanded="false" aria-controls="Panier-page">
          <span><i class='fas fa-shopping-cart' style='font-size:18px;color:white'></i>Gestion De Panier</span>
        </a>
        <ul id="Panier-page" class="collapse" aria-labelledby="Panier-page" data-parent="#side-nav-accordion">
          <li> <a href="../Panier/AjoutPanier.html">Ajouter Un panier</a> </li>
          <li> <a href="../Panier/ModifierPanier.html">Modifier Un panier</a> </li>
          <li> <a href="../Panier/SupprimerPanier.html">Supprimmer Un panier</a> </li>
          <li> <a href="../Panier/AfficherPanier.html"> Afficher les panier</a> </li>
         
        </ul>
      </li>
      <!-- /gestion panier -->

      <!-- gestion commande -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commande-page" aria-expanded="false" aria-controls="Commande-page">
          <span><i class='far fa-address-book' style='font-size:18px;color:white'></i>Gestion Des fournisseurs</span>
        </a>
        <ul id="Commande-page" class="collapse" aria-labelledby="Commande-page" data-parent="#side-nav-accordion">
          <li> <a href="AjoutFournisseur.php">Ajouter Un fournisseur</a> </li>
          <li> <a href="AfficherFournisseur.php">Afficher les fournisseurs</a> </li>
         
        </ul>
      </li>
      <!-- /gestion commande -->
     
     <!-- /gestion des livraisons/livreurs-->

      <!-- gestion des livraisons -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livraison-page" aria-expanded="false" aria-controls="Livraison-page">
          <span><i class='fas fa-truck' style='font-size:18px;color:white'></i>Gestion Des Livraisons</span>
        </a>
        <ul id="Livraison-page" class="collapse" aria-labelledby="Livraison-page" data-parent="#side-nav-accordion">
          <li> <a href="AfficherCommande.php">Afficher les commandes</a> </li>
          <li> <a href="AfficherLivraison.php"> Afficher les livraisons</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des livraisons -->

      <!-- gestion des livreurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des livreurs</span>
        </a>
        <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
          <li> <a href="AjoutLivreur.php">Ajouter Un livreur</a> </li>
          <li> <a href="AfficherLivreur.php"> Afficher les livreurs</a> </li>
         
        </ul>
      </li>

      <!-- gestion des reclamations -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Reclamation-page" aria-expanded="false" aria-controls="Reclamation-page">
          <span><i class='fas fa-bullhorn' style='font-size:18px;color:white'></i>Gestion Des Réclamations</span>
        </a>
        <ul id="Reclamation-page" class="collapse" aria-labelledby="Reclamation-page" data-parent="#side-nav-accordion">
          <li> <a href="../Reclamation/AjoutReclamation.html">Ajouter Une réclamation</a> </li>
          <li> <a href="../Reclamation/ModifierReclamation.html">Modifier Une réclamation</a> </li>
          <li> <a href="../Reclamation/SupprimerReclamation.html">Supprimmer Une réclamation</a> </li>
          <li> <a href="../Reclamation/AfficherReclamation.html"> Afficher les réclamations</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des reclamations -->

       <!-- gestion des notifications -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Notification-page" aria-expanded="false" aria-controls="Notification-page">
          <span><i class='far fa-bell' style='font-size:18px;color:white'></i>Gestion Des Notifications</span>
        </a>
        <ul id="Notification-page" class="collapse" aria-labelledby="Notification-page" data-parent="#side-nav-accordion">
          <li> <a href="../Notification/AjoutNotification.htmll">Ajouter Une Notification</a> </li>
          <li> <a href="../Notification/ModifierNotification.html">Modifier Une Notification</a> </li>
          <li> <a href="../Notification/SupprimerNotification.html">SupprimmerUne Notification</a> </li>
          <li> <a href="../Notification/AfficherNotification.html"> Afficher les Notifications</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des notifications -->

      <!-- /gestion des promotions/publicité-->

      <!-- gestion des promotions -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Promotion-page" aria-expanded="false" aria-controls="Promotion-page">
          <span><i class='fas fa-donate' style='font-size:18px;color:white'></i>Gestion Des Promotions</span>
        </a>
        <ul id="Promotion-page" class="collapse" aria-labelledby="Promotion-page" data-parent="#side-nav-accordion">
          <li> <a href="../Promotion/AjoutPromotion.html">Ajouter Une Promotions</a> </li>
          <li> <a href="../Promotion/ModifierPromotion.html">Modifier Une Promotions</a> </li>
          <li> <a href="../Promotion/SupprimerPromotion.html">Supprimmer Une Promotions</a> </li>
          <li> <a href="../Promotion/AfficherPromotion.html"> Afficher les Promotions</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de promotion -->

      <!-- gestion des publicite -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Publicité-page" aria-expanded="false" aria-controls="Publicité-page">
          <span><i class="fas fa-cannabis"></i>Gestion Des Publicités </span>
        </a>
        <ul id="Publicité-page" class="collapse" aria-labelledby="Publicité-page" data-parent="#side-nav-accordion">
          <li> <a href="../Publicité/AjoutPublicite.html">Ajouter Une Publicité</a> </li>
          <li> <a href="../Publicité/ModifierPublicite.html">Modifier Une Publicité</a> </li>
          <li> <a href="../Publicité/SupprimmerPublicite.html">Supprimmer Une Publicité</a> </li>
          <li> <a href="../Publicité/AfficherPublicite.html"> Afficher les Publicités</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de publicite -->

      <!-- /gestion des articles/commentaires-->

      <!-- gestion des articles -->
     <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Article-page" aria-expanded="false" aria-controls="Article-page">
          <span><i class='far fa-comment-alt' style='font-size:18px;color:white'></i>Gestion Des Articles et Commentaires</span>
        </a>
        <ul id="Article-page" class="collapse" aria-labelledby="Article-page" data-parent="#side-nav-accordion">
          <li> <a href="AjoutArticle1.php">Ajouter Un Article</a> </li>
          <li> <a href="AfficherArticle.php"> Afficher les Articles</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des commentaires -->
     

      
      
      
      
      
      
     
    </ul>


  </aside>


  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>Hey man, looking forward to your new project.</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>Dear John, I was told you bought Greendash! Send me your feedback</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                  <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body">
                  <span>How many people are we inviting to the dashboard?</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="../apps/email.html">Go to Inbox</a>
            </li>
          </ul>
        </li>
        <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>12 ways to improve your crypto dashboard</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>You have newly registered users</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>Your account was logged in from an unauthorized IP</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                </div>
              </a>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span>An application form has been submitted</span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
              <a href="#">View all Notifications</a>
            </li>
          </ul>
        </li>

        <li class="ms-nav-item m-0">
          <label class="ms-switch m-0">
            <input type="checkbox" id="remove-quickbar" checked="">
            <span class="ms-switch-slider round"></span>
          </label>
        </li>
        <?php
        $id=$_SESSION['UID'];
        $img=$_SESSION['UPIC'];
        $nom=$_SESSION['UNAME'];
        $prenom=$_SESSION['ULNAME'];
        $adresse=$_SESSION['UEMAIL'];
         ?>
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="<?php echo($img); ?>" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome <?php echo($prenom); ?> <?php echo($nom); ?> </span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="AfficherProfilAdmin.php"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Messagerie</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="ParametreProfilAdmin.php" class="btn-link" data-toggle="modal" data-target="#modal-12"> <span><i class="flaticon-gear mr-2"></i> Paramètre </span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="LockScreen.php"> <span><i class="flaticon-security mr-2"></i> Mettre en veille</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="DeconnexionAdmin.php"> <span><i class="flaticon-shut-down mr-2"></i> Se déconnecter</span> </a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>
    <!-- body wrapper -->
    <form method="POST" action="ModifierAdmin.php">
   <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh" style="width: 1000px ; margin-left: 120px;">

            <div class="ms-panel-body">
              <form class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                    <label for="validationCustom10">Nom</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="Nom" id="validationCustom10" placeholder="Nom" required="" value="<?PHP echo ($nom);?>">
                      <div class="invalid-feedback">
                        Nom
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xl-12 col-md-12">
                    <label for="validationCustom17" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Prenom</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="Prenom" id="validationCustom17" placeholder="Prenom" required="" value="<?PHP echo ($prenom);?>">
                      <div class="invalid-feedback">
                       
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xl-12 col-md-12">
                    <label for="validationCustom18" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Adresse Email</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="Adresse" id="validationCustom18" placeholder="Email" required="" value="<?PHP echo ($adresse);?>">
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-12 col-md-12">
                    <label for="validationCustom18" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Voulez vous changer votre mot de passe</label>
                  </div>

                  <li style="margin-left: 30px;">
                    <label class="ms-checkbox-wrap ms-checkbox-success">
                        <input type="radio" value="" name="radioExample2" id="oui">
                        <i class="ms-checkbox-check"></i>
                        </label>
                        <span> OUI </span>
                    </li>
                    
                    <li style="margin-left: 100px;">
                        <label class="ms-checkbox-wrap ms-checkbox-danger">
                          <input type="radio" value="" name="radioExample2" checked="" id="non">
                          <i class="ms-checkbox-check"></i>
                        </label>
                        <span> NON </span>
                      </li>

                  <div class="col-xl-12 col-md-12">
                    <label for="validationCustom18" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card" id="mdplabel">Saisir votre nouveau mot de passe</label>
                    <div class="input-group">
                      <input type="password" name="MDPV" class="form-control" id="MDPV" placeholder="saisir le nouveau Mot De Passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>
                  

                <div id="message" style="margin-right: 100px">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                  <div class="col-md-12">

                    <button class="btn btn-primary" name="modifier" type="submit">Modifier</button>
                  </div>

                </div>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </form> 

  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Chat" data-title="Chat">
        <a href="#qa-chat" aria-controls="qa-chat" role="tab" data-toggle="tab">
          <i class="flaticon-chat"></i>
          <span class="ms-quick-bar-label">Chat</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Email" data-title="Email">
        <a href="#qa-email" aria-controls="qa-email" role="tab" data-toggle="tab">
          <i class="flaticon-mail"></i>
          <span class="ms-quick-bar-label">Email</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
        <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
          <i class="flaticon-list"></i>
          <span class="ms-quick-bar-label">To-do</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
        <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
          <i class="flaticon-bell"></i>
          <span class="ms-quick-bar-label">Reminder</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
        <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
          <i class="flaticon-pencil"></i>
          <span class="ms-quick-bar-label">Notes</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
        <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
          <i class="flaticon-share-1"></i>
          <span class="ms-quick-bar-label">Invite</span>
        </a>
      </li>

    </ul>

    <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

      <a href="#">
        <i class="flaticon-hammer"></i>
        <span class="ms-quick-bar-label">Configure</span>
      </a>

    </div>

    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix">
        <h5 class="ms-quick-bar-title float-left">Title</h5>
        <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="ms-quick-bar-body tab-content">
        <div role="tabpanel" class="tab-pane" id="qa-chat">

          <div class="ms-chat-container">

            <div class="ms-chat-header px-3">
              <div class="ms-chat-user-container media clearfix">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                  <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-chat-user-info mt-1">
                  <h6>Anny Farisha</h6>
                  <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Available
                  </a>
                  <ul class="dropdown-menu">
                    <li class="ms-dropdown-list">
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Busy</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Away</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Offline</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <form class="ms-form my-3" method="post">
                <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                  <input type="search" class="ms-form-input w-100" name="search" placeholder="Search for People and Groups" value="">
                  <i class="flaticon-search text-disabled"></i>
                </div>
              </form>
            </div>

            <div class="ms-chat-body">
              <ul class="nav nav-tabs tabs-bordered d-flex nav-justified px-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#chats" aria-controls="chats" class="active show" role="tab" data-toggle="tab"> Chats </a></li>
                <li role="presentation" class="fs-12"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab"> Groups </a></li>
                <li role="presentation" class="fs-12"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab"> Contacts </a></li>
              </ul>

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active show fade in" id="chats">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                        <span class="msg-count">3</span>
                        <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <span class="ms-chat-time">2 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <span class="ms-chat-time">3 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Heather Brown</h6> <span class="ms-chat-time">12 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-busy ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Micheal John</h6> <span class="ms-chat-time">Yesterday</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="groups">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/dashboard/rakhan-potik-1.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                          <li class="ms-group-count"> + 12 more </li>
                        </ul>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-4.jpg" alt="member"> </li>
                        </ul>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-4.jpg" alt="member"> </li>
                          <li class="ms-group-count"> + 4 more </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="contacts">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-8.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Micheal John</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Heather Brown</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Mila Freign</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-email">

          <div class="ms-email-container">

            <div class="ms-qa-options">
              <a href="#" class="btn btn-primary w-100 mt-0 has-icon"> <i class="flaticon-pencil"></i> Compose Email </a>
            </div>

            <ul class="ms-scrollable ms-quickbar-container">
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">James Zathila</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">2 Hours ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">John Doe</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">8 Hours ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">Heather Brown</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">1 Day ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-toDo">
          <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

            <form class="ms-add-task-block">
              <div class="form-group mx-3 mt-0  fs-14 clearfix">
                <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
                <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
              </div>
            </form>

            <ul class="ms-todo-list">
              <li class="ms-card ms-qa-card ms-deletable">

                <div class="ms-card-header clearfix">
                  <h6 class="ms-card-title">Task Block Title</h6>
                  <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
                </div>

                <div class="ms-card-body">
                  <ul class="ms-list ms-task-block">
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span> Task to do </span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span>Task to do</span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                  </ul>
                </div>

                <div class="ms-card-footer clearfix">
                  <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                  <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </li>
            </ul>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-reminder">
          <div class="ms-quickbar-container ms-reminders">

            <ul class="ms-qa-options">
              <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
            </ul>

            <div class="ms-quickbar-container ms-scrollable">

              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Developer Meeting in Block B </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>
              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Start adding change log to version 2 </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-notes">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
            <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Don't forget to check with the Manager</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                  <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Perform the required unit tests</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-8.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-invite">

          <div class="ms-quickbar-container text-center ms-invite-member">
            <i class="flaticon-network"></i>
            <p>Invite Team Members</p>
            <form>
              <div class="ms-form-group">
                <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
              </div>
              <div class="ms-form-group">
                <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
              </div>
            </form>
          </div>

        </div>

      </div>

    </div>

  </aside>
<form method="POST" action="VerificationMdp.php">
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">

          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="flaticon-secure-shield d-block"></i>
            <h1>Modifier vos données </h1>
            <p>Entrer le mot de passe pour pouvoir modifier vos données</p>
            <form method="post">
              <div class="ms-form-group has-icon">
                <input type="password" placeholder="Mot de passe" class="form-control" name="Pin" value="">
                <i class="material-icons"></i>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
</form>
  <!-- MODALS -->

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> New Reminder</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Remind me about</label>
              <textarea class="form-control" name="reminder"></textarea>
            </div>

            <div class="ms-form-group">
              <span class="ms-option-name fs-14">Repeat Daily</span>
              <label class="ms-switch float-right">
                <input type="checkbox">
                <span class="ms-switch-slider round"></span>
              </label>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <select class="form-control" name="reminder-time">
                    <option value="">12:00 pm</option>
                    <option value="">1:00 pm</option>
                    <option value="">2:00 pm</option>
                    <option value="">3:00 pm</option>
                    <option value="">4:00 pm</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Notes Modal -->
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Note Title</label>
              <input type="text" class="form-control" name="note-title" value="">
            </div>

            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="note-description"></textarea>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js"> </script>
  <script src="assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Greendash core JavaScript -->
  <script src="assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
  <script>
var myInput = document.getElementById("MDPV");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<script type="text/javascript">
 document.getElementById("MDPV").style.display = "none";
 document.getElementById("mdplabel").style.display = "none";
 var oui = document.getElementById("oui");
 var non = document.getElementById("non");
  oui.onclick = function() {
  document.getElementById("MDPV").style.display = "block";
  document.getElementById("mdplabel").style.display = "block";

}
  non.onclick = function() {
  document.getElementById("MDPV").style.display = "none";
  document.getElementById("mdplabel").style.display = "none";

}

</script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:48 GMT -->
</html>

