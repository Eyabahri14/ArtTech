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
  <title>SEFRIM</title>
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
         <?php 
        include_once "../core/ReminderC.php";
        include_once "../entities/Reminder.php";
        $Reminder1C = new ReminderC();
        $liste_Reminder=$Reminder1C->CompterNotification();
        foreach ($liste_Reminder as $row) 
                        {
                           $nb_Reminder=$row['count(*)'];
                         }
        ?>

         
        
        <li class="ms-nav-item dropdown">
          <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info"><?php echo ($nb_Reminder); ?></span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
                <?php 
                include_once "../core/ReminderC.php";
                include_once "../entities/Reminder.php";
                $Reminder1C = new ReminderC();
                $listeReminder=$Reminder1C->AfficherReminder();
                foreach ($listeReminder as $row) 
                        {
                          $titre=$row['Titre'];
                          $date=$row['DateR'];
                          $heure=$row['Heure'];
        ?>
              <a class="media p-2" href="#">
                <div class="media-body">
                  <span><?php echo ($titre); ?></span>
                  <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> <?php echo ($date); ?> - <?php echo ($heure); ?></p>
                </div>
              </a>
              <?php } ?>
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
              <a class="media fs-14 p-2" href="BoiteMail.php"> <span><i class="flaticon-mail mr-2"></i> Messagerie</span> <span class="badge badge-pill badge-info">3</span> </a>
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
    
      <?php 
      include "../core/ProduitC.php";
      $ProduitC=new ProduitC();
      $varb=$_GET['Id'];
      $listeProduit= $ProduitC->RecupererProduit($varb);
         ?>

    <div class="ms-content-wrapper">
      <div class="row ">

        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Produit</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail du produit</li>
            </ol>
          </nav>
          
        </div>
        
        <div class="col-xl-6 col-md-12  bg-white">
          <div class="ms-panel shadow-none ms-panel-fh">
            <div class="ms-panel-body pb-0">

              <h3>Product Details</h3>
              <p></p>
              <table class="table ms-profile-information">
                <tbody>
    
                    <?php foreach ($listeProduit as $row) 
                        {

                          $img=$row['Image'];
                          

                    ?>

                  <tr>
                    <th scope="row">Identifiant</th>
                    <td><?php echo $row['Id'];  ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Nom du Produit</th>
                    <td><?php echo $row['Nom'];  ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Catégories</th>
                    <td><?php echo $row['Type'];  ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Prix</th>
                    <td><?php echo $row['Prix'];  ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Quantité</th>
                    <td><?php echo $row['Quantite'];  ?></td>
                  </tr>

                  <tr>
                    <th scope="row">Description</th>
                    <td><?php echo $row['Description'];  ?></td>
                  </tr>

                  <tr>
                    <th scope="row"></th>
                    <td></td>
                  </tr>

                </tbody>
              <?php }?>
              </table>
              <button class="btn btn-primary mr-3  ms-graph-metrics"><a href="ModifierProduit.php?Id=<?php echo $row['Id'];?>">Modifier</a></button>
              <button class="btn btn-dark ms-graph-metrics" name="supprimer"><a href="SupprimerProduit.php?Id=<?php echo $row['Id'];?>">Supprimer</a></button>
            </div>

          </div>

        </div>

        <div class="col-xl-6 col-md-12 bg-white">
          <div class="ms-panel shadow-none">

            <div class="ms-panel-body pb-0">
              <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo($img); ?>" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo($img); ?>" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo($img); ?>" alt="Third slide">
                  </div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#imagesSlider" data-slide-to="0" class="active"> <img class="d-block w-100" src="<?php echo($img); ?>" alt="First slide"></li>
                  <li data-target="#imagesSlider" data-slide-to="1"><img class="d-block w-100" src="<?php echo($img); ?>" alt="Second slide"></li>
                  <li data-target="#imagesSlider" data-slide-to="2"><img class="d-block w-100" src="<?php echo($img); ?>" alt="Third slide"></li>
                </ol>
              </div>

            </div>

          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="progress-rounded progress-round-tiny">
                <div class="progress-value">Return 12%</div>
                <svg>
                  <circle class="progress-cicle bg-primary" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="12" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
                  </circle>
                </svg>
              </div>
            </div>
            <div class="col-md-4">
              <div class="progress-rounded progress-round-tiny">
                <div class="progress-value">Favourite 38.8%</div>
                <svg>
                  <circle class="progress-cicle bg-dark" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="38.8" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
                  </circle>
                </svg>
              </div>
            </div>

            <div class="col-md-4">
              <div class="progress-rounded progress-round-tiny last-circle">
                <div class="progress-value">Sales 100%</div>
                <svg>
                  <circle class="progress-cicle bg-primary" cx="65" cy="65" r="57" stroke-width="4" fill="none" aria-valuenow="100" aria-orientation="vertical" aria-valuemin="0" aria-valuemax="100" role="slider">
                  </circle>
                </svg>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </main>


  <!-- Quick bar -->


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
</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:48 GMT -->
</html>