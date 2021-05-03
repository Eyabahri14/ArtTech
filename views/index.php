<?php
/*
session_start();
if (isset($_SESSION['Username'])){

}else {
  header('Location: ../views/LoginAdmin.php');
  exit();

}

*/



?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/greendash/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:08:02 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SEFRIM Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- Greendash styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

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
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.php"> <img src="assets/img/dashboard/logo.png" alt="logo"> </a>
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


      <!-- gestion des produits/categories -->

      <!-- gestion des produits-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Produit-page" aria-expanded="false" aria-controls="Produit-page">
         <span><i class='fas fa-apple-alt' style='font-size:16px;color:white'></i>Gestion Des Produits</span>
        </a>
        <ul id="Produit-page" class="collapse" aria-labelledby="Produit-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Produit/AjoutProduit.html">Ajouter Un Produit</a> </li>
          <li> <a href="pages/Produit/ModifierProduit.html">Modifier Un Produit</a> </li>
          <li> <a href="pages/Produit/SupprimerProduit.html">Supprimmer Un Produit</a> </li>
          <li> <a href="pages/Produit/AfficherProduit.html"> Afficher les Produit</a> </li>

        </ul>
      </li>
      <!-- /gestion de produit-->

      <!-- gestion des categories-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Categorie-page" aria-expanded="false" aria-controls="Categorie-page">
          <span><i class='far fa-clipboard' style='font-size:18px;color:white'></i>Gestion Des Catégories</span>
        </a>
        <ul id="Categorie-page" class="collapse" aria-labelledby="Categorie-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Categorie/AjoutCategorie.html">Ajouter Une catégories</a> </li>
          <li> <a href="pages/Categorie/ModifierCategorie.html">Modifier  Une catégories</a> </li>
          <li> <a href="pages/Categorie/SupprimerCategorie.html">Supprimmer  Une catégories</a> </li>
          <li> <a href="pages/Categorie/AfficherCategorie.html"> Afficher les Catégories</a> </li>

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
          <li> <a href="pages/Panier/AjoutPanier.html">Ajouter Un Panier</a> </li>
          <li> <a href="pages/Panier/ModifierPanier.html">Modifier  Un Panier</a> </li>
          <li> <a href="pages/Panier/SupprimerPanier.html">Supprimmer  Un Panier</a> </li>
          <li> <a href="pages/Panier/AfficherPanier.html"> Afficher les Panier</a> </li>

        </ul>
      </li>
      <!-- /gestion panier -->

      <!-- gestion commande -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commande-page" aria-expanded="false" aria-controls="Commande-page">
          <span><i class='far fa-address-book' style='font-size:18px;color:white'></i>Gestion De commande</span>
        </a>
        <ul id="Commande-page" class="collapse" aria-labelledby="Commande-page" data-parent="#side-nav-accordion">
          <li> <a href="AjoutCommande.html">Ajouter Une commande</a> </li>
          <li> <a href="pages/Commande/ModifierCommande.html">Modifier Une commande</a> </li>
          <li> <a href="pages/Commande/SupprimerCommande.html">Supprimmer Une commande</a> </li>
          <li> <a href="afficherCommande.php"> Afficher les commandes</a> </li>

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
          <li> <a href="pages/Livraison/AjoutLivraison.html">Ajouter Une livraison</a> </li>
          <li> <a href="pages/Livraison/ModifierLivraison.html">Modifier Une livraison</a> </li>
          <li> <a href="pages/Livraison/SupprimerLivraison.html">Supprimmer Une livraison</a> </li>
          <li> <a href="pages/Livraison/AfficherLivraison.html"> Afficher les livraisons</a> </li>

        </ul>
      </li>
      <!-- /gestion des livraisons -->

      <!-- gestion des livreurs -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Livreur-page" aria-expanded="false" aria-controls="Livreur-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des livreurs</span>
        </a>
        <ul id="Livreur-page" class="collapse" aria-labelledby="Livreur-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Livreur/AjoutLivreur.html">Ajouter Un livreur</a> </li>
          <li> <a href="pages/Livreur/ModifierLivreur.html">Modifier Un livreur</a> </li>
          <li> <a href="pages/Livreur/SupprimerLivreur.html">Supprimmer Un livreur</a> </li>
          <li> <a href="pages/Livreur/AfficherLivreur.html"> Afficher les livreurs</a> </li>

        </ul>
      </li>
      <!-- /gestion des livreurs -->

      <!-- /gestion des clients-->
      <!-- Product Page Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Client-page" aria-expanded="false" aria-controls="Client-page">
          <span><i class='fas fa-user-tie' style='font-size:18px;color:white'></i>Gestion Des clients</span>
        </a>
        <ul id="Client-page" class="collapse" aria-labelledby="Client-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Client/AjoutClient.html">Ajouter Un client</a> </li>
          <li> <a href="pages/Client/ModifierClient.html">Modifier Un client</a> </li>
          <li> <a href="pages/Client/SupprimerClient.html">Supprimmer Un client</a> </li>
          <li> <a href="pages/Client/AfficherClient.html"> Afficher les clients</a> </li>

        </ul>
      </li>
      <!-- /Product page -->

      <!-- /gestion des reclamations/notifications-->

      <!-- gestion des reclamations -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Reclamation-page" aria-expanded="false" aria-controls="Reclamation-page">
          <span><i class='fas fa-bullhorn' style='font-size:18px;color:white'></i>Gestion Des Réclamations</span>
        </a>
        <ul id="Reclamation-page" class="collapse" aria-labelledby="Reclamation-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Reclamation/AjoutReclamation.html">Ajouter Une réclamation</a> </li>
          <li> <a href="pages/Reclamation/ModifierReclamation.html">Modifier Une réclamation</a> </li>
          <li> <a href="pages/Reclamation/SupprimerReclamation.html">Supprimmer Une réclamation</a> </li>
          <li> <a href="pages/Reclamation/AfficherReclamation.html"> Afficher les réclamations</a> </li>

        </ul>
      </li>
      <!-- /gestion des reclamations -->

       <!-- gestion des notifications -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Notification-page" aria-expanded="false" aria-controls="Notification-page">
          <span><i class='far fa-bell' style='font-size:18px;color:white'></i>Gestion Des Notifications</span>
        </a>
        <ul id="Notification-page" class="collapse" aria-labelledby="Notification-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Notification/AjoutNotification.htmll">Ajouter Une Notification</a> </li>
          <li> <a href="pages/Notification/ModifierNotification.html">Modifier Une Notification</a> </li>
          <li> <a href="pages/Notification/ASupprimerNotification.html">SupprimmerUne Notification</a> </li>
          <li> <a href="pages/Notification/AfficherNotification.html"> Afficher les Notifications</a> </li>

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
          <li> <a href="pages/Promotion/AjoutPromotion.html">Ajouter Une Promotions</a> </li>
          <li> <a href="pages/Promotion/ModifierPromotion.html">Modifier Une Promotions</a> </li>
          <li> <a href="pages/Promotion/SupprimerPromotion.html">Supprimmer Une Promotions</a> </li>
          <li> <a href="pages/Promotion/AfficherPromotion.html"> Afficher les Promotions</a> </li>

        </ul>
      </li>
      <!-- /gestion de promotion -->

      <!-- gestion des publicite -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Publicité-page" aria-expanded="false" aria-controls="Publicité-page">
          <span><i class="fas fa-cannabis"></i>Gestion Des Publicités </span>
        </a>
        <ul id="Publicité-page" class="collapse" aria-labelledby="Publicité-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Publicité/AjoutPublicite.html">Ajouter Une Publicité</a> </li>
          <li> <a href="pages/Publicité/ModifierPublicite.html">Modifier Une Publicité</a> </li>
          <li> <a href="pages/Publicité/SupprimerPublicite.html">Supprimmer Une Publicité</a> </li>
          <li> <a href="pages/Publicité/AfficherPublicite.html"> Afficher les Publicités</a> </li>

        </ul>
      </li>
      <!-- /gestion de publicite -->

      <!-- /gestion des articles/commentaires-->

      <!-- gestion des articles -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Article-page" aria-expanded="false" aria-controls="Article-page">
          <span><i class='far fa-comment-alt' style='font-size:18px;color:white'></i>Gestion Des Articles</span>
        </a>
        <ul id="Article-page" class="collapse" aria-labelledby="Article-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Article/AjoutArticle.html">Ajouter Un Article</a> </li>
          <li> <a href="pages/Article/ModifierArticle.html">Modifier  Un Article</a> </li>
          <li> <a href="pages/Article/SupprimerArticle.html">Supprimmer  Un Article</a> </li>
          <li> <a href="pages/Article/AfficherArticle.html"> Afficher les Articles</a> </li>

        </ul>
      </li>
      <!-- /gestion des articles -->

      <!-- gestion des commentaires -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commentaire-page" aria-expanded="false" aria-controls="Commentaire-page">
          <span><i class='far fa-comment' style='font-size:18px;color:white'></i>Gestion Des Commentaires </span>
        </a>
        <ul id="Commentaire-page" class="collapse" aria-labelledby="Commentaire-page" data-parent="#side-nav-accordion">
          <li> <a href="pages/Commentaire/AjoutCommentaire.html">Ajouter Un Commentaire</a> </li>
          <li> <a href="pages/Commentaire/ModifierCommentaire.html">Modifier Un Commentaire</a> </li>
          <li> <a href="pages/Commentaire/SupprimerCommentaire.html">Supprimmer Un Commentaire</a> </li>
          <li> <a href="pages/Commentaire/AfficherCommentaire.html"> Afficher les Commentaires</a> </li>

        </ul>
      </li>
      <!-- /gestion des commentaires -->









    </ul>


  </aside>

  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">

    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>

    <div class="ms-aside-body">

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="recentPosts">

          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Advanced Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-right">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

        </div>

      </div>

    </div>

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
        <li class="ms-nav-item ms-search-form pb-0 py-0">
          <form class="ms-form" method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
              <input type="search" class="ms-form-input" name="search" placeholder="Rechercher..." value="">
              <i class="flaticon-search text-disabled"></i>
            </div>
          </form>
        </li>
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
              <a href="pages/apps/email.html">Go to Inbox</a>
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

        <li class="ms-nav-item m-0 display-none-sm">
          <label class="ms-switch m-0">
            <input type="checkbox" id="remove-quickbar" checked="">
            <span class="ms-switch-slider round"></span>
          </label>
        </li>
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="assets/img/dashboard/rakhan-potik-1.jpg" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, mahou ayoub</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="login/profile.php"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../login/logout.php"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
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

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Orders</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                <p class="fs-12">48% From Last 24 Hours</p>
              </div>
            </div>
            <i class="flaticon-archive"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Compeleted Orders</h6>
                <p class="ms-card-change"> $80,950</p>
                <p class="fs-12">2% Decreased from last day</p>
              </div>
            </div>
            <i class="flaticon-supermarket"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Pending Orders</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                <p class="fs-12">48% From Last 24 Hours</p>
              </div>
            </div>
            <i class="flaticon-reuse"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
            <div class="ms-card-body pos media">
              <div class="media-body">
                <h6>Total Products</h6>
                <p class="ms-card-change "> $80,950</p>
                <p class="fs-12">2% Decreased from last week</p>
              </div>
            </div>
            <i class="fas fa-cannabis "></i>
          </div>
        </div>
        <div class="col-md-12 col-xl-6">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header ms-panel-custom align-items-center">
              <h6>Orders Graph</h6>
              <ul class="nav nav-tabs d-flex nav-justified mb-0" role="tablist">
                <li><a href="#tab13" aria-controls="tab13" class=" pb-0" role="tab" data-toggle="tab" aria-selected="false"><i class="fas fa-chart-bar fa-2x "></i></a></li>
                <li><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab" class="active pb-0 show" aria-selected="true"><i class="fas fa-chart-line fa-2x "></i> </a></li>

              </ul>
            </div>
            <div class="ms-panel-body clearfix">

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in" id="tab13">
                  <div class="ms-panel-body">
                    <canvas id="bar-chart"></canvas>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade active show" id="tab14">
                  <div class="ms-panel-body">
                    <canvas id="line-chart"></canvas>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab15">

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh ms-crypto-orders">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-between">
                <div class="ms-header-text">
                  <h6>Current Sales</h6>
                  <p>Manage your current sale and buy orders</p>
                </div>
                <ul class="btn-group btn-group-toggle nav nav-tabs ms-graph-metrics" role="tablist">
                  <li role="presentation"><a href="#b-orders" aria-controls="b-orders" class="btn btn-sm active show" role="tab" data-toggle="tab" aria-selected="true"> Buy Orders </a></li>
                  <li role="presentation"><a href="#s-orders" aria-controls="s-orders" class="btn btn-sm" role="tab" data-toggle="tab" aria-selected="false"> Sell Orders </a></li>
                </ul>
              </div>
            </div>
            <div class="ms-panel-body p-0">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="b-orders">
                  <div class="table-responsive">
                    <table class="table table-hover thead-light">
                      <thead>
                        <tr>
                          <th scope="col">Price ($)</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Track ID</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$5813.44</td>
                          <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$1264.99</td>
                          <td><i class="fas fa-dollar-sign BTC"></i> 0.117</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$3789.31</td>
                          <td><i class="fas fa-euro-sign PPC-alt"></i>0.217</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$5813.44</td>
                          <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="s-orders">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Price ($)</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Track ID</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$5813.44</td>
                          <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$1264.99</td>
                          <td><i class="fas fa-dollar-sign BTC"></i> 0.117</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$3789.31</td>
                          <td><i class="fas fa-euro-sign PPC-alt"></i>0.217</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$7860.24</td>
                          <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                        <tr>
                          <td>$5813.44</td>
                          <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                          <td>#TR34351</td>
                          <td>12.01.2019</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-12 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header ms-panel-custom ">

              <div class="ms-heading">
                <h6>Top Sallers Products</h6>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
              </div>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Avalability</th>
                      <th>Last Purchase</th>
                      <th>Ratings</th>
                      <th>Price</th>
                      <th>Total Orders</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/dashboard/product-1.jpg" alt="people"> <a href="#">White Widow </a></td>
                      <td><span class="badge badge-success">In Stock</span></td>
                      <td>26-10-2019</td>
                      <td>
                        <ul class="ms-star-rating rating-fill mb-0 rating-circle heart-rating">
                          <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        </ul>
                      </td>
                      <td>$450.50</td>
                      <td>752</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/dashboard/product-2.jpg" alt="people"> <a href="#">Super Sunk </a></td>
                      <td><span class="badge badge-success">In Stock</span></td>
                      <td>27-10-2019</td>
                      <td>
                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                          <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        </ul>
                      </td>
                      <td>$350.50</td>
                      <td>365</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/dashboard/product-3.jpg" alt="people"><a href="#">Low Rider</a></td>
                      <td><span class="badge badge-danger">Out Of Stock</span></td>
                      <td>28-10-2019</td>
                      <td>
                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                          <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        </ul>
                      </td>
                      <td>$550.50</td>
                      <td>165</td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-8 col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header  ms-panel-custom">
              <div class="ms-heading">
                <h6>Product Ratings</h6>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
              </div>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover thead-primary">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Product Ratings</th>
                      <th>Total Order </th>
                      <th>Repeat Order</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/dashboard/product-1.jpg" alt="people"><a href="#">White Widow</a> </td>


                      <td>
                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                          <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome  rated"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                        </ul>
                      </td>
                      <td>245</td>
                      <td>45</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/dashboard/product-2.jpg" alt="people"><a href="#">Super Skunk</a></td>


                      <td>
                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                          <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                        </ul>
                      </td>
                      <td>546</td>
                      <td>146</td>
                    </tr>
                    <tr>
                      <td class="ms-table-f-w"> <img src="assets/img/dashboard/product-2.jpg" alt="people"> <a href="#">Low Rider</a> </td>


                      <td>
                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                          <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                          <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                        </ul>
                      </td>
                      <td>365</td>
                      <td>265</td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Social Media Followers</h6>

            </div>
            <div class="ms-panel-body p-0">
              <div class="ms-social-media-followers">
                <div class="ms-social-grid">
                  <i class="fab fa-linkedin-in bg-linkedin"></i>
                  <p class="ms-text-dark">8,033</p>
                  <span>Followers</span>
                </div>
                <div class="ms-social-grid">
                  <i class="fab fa-twitter bg-twitter"></i>
                  <p class="ms-text-dark">8,039</p>
                  <span>Followers</span>
                </div>
              </div>
              <div class="ms-social-media-followers">
                <div class="ms-social-grid">
                  <i class="fab fa-facebook-f bg-facebook"></i>
                  <p class="ms-text-dark">8,039</p>
                  <span>Likes</span>
                </div>
                <div class="ms-social-grid">
                  <i class="fab fa-instagram bg-instagram"></i>
                  <p class="ms-text-dark">98,039</p>
                  <span>Followers</span>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Active Orders Graph -->


        <!-- Orders Table Expanded -->
        <div class="col-md-12">
          <div class="ms-panel ms-crypto-orders-expanded">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-between">
                <div class="ms-header-text">
                  <h6>Order History</h6>
                  <p>Track your active orders</p>
                </div>

              </div>
            </div>
            <div class="ms-panel-body p-0">
              <div class="table-responsive">
                <table class="table table-hover thead-primary ">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Name</th>
                      <th scope="col">Product ID</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Category</th>
                      <th scope="col">Orders</th>
                      <th scope="col">Repeats</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12.01.2019</td>
                      <td>Hemp Oil</td>
                      <td>#TR137381</td>
                      <td>$900.50</td>
                      <td> Oil </td>
                      <td class="ms-trend"> <canvas id="trend-01"></canvas> </td>
                      <td>$5.85</td>
                    </tr>
                    <tr>
                      <td>11.01.2019</td>
                      <td>Gummy Bears</td>
                      <td>#TR371893</td>
                      <td>$335.50</td>
                      <td> Edibles </td>
                      <td class="ms-trend"> <canvas id="trend-02"></canvas> </td>
                      <td>$5.85</td>
                    </tr>
                    <tr>
                      <td>10.01.2019</td>
                      <td>Mango Kush</td>
                      <td>#TR137381</td>
                      <td>$378.50</td>
                      <td> Plants </td>
                      <td class="ms-trend"> <canvas id="trend-03"></canvas> </td>
                      <td>$5.85</td>
                    </tr>
                    <tr>
                      <td>09.01.2019</td>
                      <td>Purple Haze</td>
                      <td>#TR371893</td>
                      <td>$219.30</td>
                      <td> FLowers</td>
                      <td class="ms-trend"> <canvas id="trend-04"></canvas> </td>
                      <td>$5.85</td>
                    </tr>
                    <tr>
                      <td>08.01.2019</td>
                      <td>UK Cheese</td>
                      <td>#TR137381</td>
                      <td>$438.50</td>
                      <td>Leafs</td>
                      <td class="ms-trend"> <canvas id="trend-05"></canvas> </td>
                      <td>$5.85</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-4 ">

          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Total Revenue </h6>
            </div>
            <div class="ms-panel-body">
              <span class="progress-label bold">Weekly Earnings</span>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
              </div>
              <span class="progress-label  bold">Monthly Earnings</span>
              <div class="progress">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div>
              <span class="progress-label  bold">Quaterly Earnings</span>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
              </div>
              <span class="progress-label  bold">Yearly Earnings</span>
              <div class="progress">
                <div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>


            </div>
          </div>
        </div>
        <div class="col-xl-8 col-md-12">

          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header header-mini">
              <h6>Average Users By Country</h6>
              <p>The top locations where users of your product are located</p>
            </div>
            <div class="ms-panel-body ms-average-users-country">
              <div class="row">
                <div class="col-xl-4 col-md-12">
                  <span class="progress-label">United States</span>
                  <span class="progress-status">14,805</span>
                  <div class="progress progress-tiny">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="progress-label">Brazil</span>
                  <span class="progress-status">11,651</span>
                  <div class="progress progress-tiny">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="progress-label">Russia</span>
                  <span class="progress-status">9,157</span>
                  <div class="progress progress-tiny">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="progress-label">India</span>
                  <span class="progress-status">7,846</span>
                  <div class="progress progress-tiny">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="progress-label">Australia</span>
                  <span class="progress-status">6,789</span>
                  <div class="progress progress-tiny mb-0">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="offset-xl-1 col-xl-7 col-md-12">
                  <div id="world-map" class="vector-map"></div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>
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

  <!-- Page Specific Scripts Start -->
  <script src="assets/js/moment.js"> </script>
  <script src="assets/js/jquery.webticker.min.js"> </script>
  <script src="assets/js/Chart.bundle.min.js"> </script>
  <script src="assets/js/Chart.Financial.js"> </script>
  <script src="assets/js/table-line.js"> </script>
  <script src="assets/js/index-chart.js"> </script>

  <script src="assets/js/d3.v3.min.js"> </script>
  <script src="assets/js/topojson.v1.min.js"> </script>
  <script src="assets/js/datamaps.all.min.js"> </script>
  <script src="assets/js/index-map.js"> </script>






  <!-- Page Specific Scripts End -->

  <!-- Greendash core JavaScript -->
  <script src="assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="assets/js/settings.js"></script>

</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:09:52 GMT -->
</html>
