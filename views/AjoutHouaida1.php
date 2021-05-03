<?php 
session_start();
if(isset($_SESSION['UID']) && isset($_SESSION['UNAME'])){
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
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img style="width: 140px;height: 45px" class="ms-user-img ms-img-round float-right" src="<?php echo($img); ?>" alt="people"> </a>
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
    
  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">
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

    

    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix">
        <h5 class="ms-quick-bar-title float-left">Title</h5>
        <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="ms-quick-bar-body tab-content">

        <div role="tabpanel" class="tab-pane" id="qa-reminder">
          <div class="ms-quickbar-container ms-reminders">

            <ul class="ms-qa-options">
              <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> Nouveau rappel </a> </li>
            </ul>

            <div class="ms-quickbar-container ms-scrollable">
        <?php 
        include_once "../core/ReminderC.php";
        include_once "../entities/Reminder.php";

        $Reminder1C = new ReminderC();
        $listeReminder=$Reminder1C->AfficherReminder();
        foreach ($listeReminder as $row) 
                        {
                          $idr=$row['Id'];
                          $titre=$row['Titre'];
                          $date=$row['DateR'];
                          $heure=$row['Heure'];
        ?>
              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> <?php echo ($titre) ?> </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> <?php echo ($date) ?>  -  <?php echo ($heure) ?></span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="SupprimerReminder.php?IdR=<?php echo ($idr) ; ?>" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Supprimer </a>
                  </div>

                </div>
              </div>
             
   <?php } ?>
            </div>

          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="qa-notes">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> ajouter note </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">
             <?php 
        include_once "../core/NoteC.php";
        include_once "../entities/Note.php";

        $Note1C = new NoteC();
        $listeNote=$Note1C->AfficherNote();
        foreach ($listeNote as $row) 
                        {
                          $id=$row['Id'];
                          $titre=$row['Titre'];
                          $description=$row['Description'];
        ?>
            <div class="ms-card ms-qa-card ms-deletable">

              <div class="ms-card-header">
                <h6 class="ms-card-title"><?php echo ($titre); ?></h6>
              </div>
              <div class="ms-card-body">
                <p>
                  <?php echo ($description); ?>
                </p>
              </div>
              <div class="ms-card-footer clearfix">
                <div class="ms-note-editor float-right">
                  <a href="SupprimerNote.php?Id=<?php echo ($id); ?>" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Supprimer </a>
                </div>

              </div>
            </div>

                 <?php }?>

          </div>

        </div>



        <form action="MailingInvitation.php" method="POST">
        <div role="tabpanel" class="tab-pane" id="qa-invite">

          <div class="ms-quickbar-container text-center ms-invite-member">
            <i class="flaticon-network"></i>
            <p>Inviter un nouveau membre</p>
              <div class="ms-form-group">
                <input type="text" placeholder="Member Email" class="form-control" name="MembreEmail" value="">
              </div>
              <div class="ms-form-group">
                <button type="submit" name="invite-member" class="btn btn-primary w-100">Inviter</button>
              </div>
          </div>
  </form>


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
  <form action="AjouterReminder.php" method="POST">
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> Nouveau Rappel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>


          <div class="modal-body">

            <div class="ms-form-group">
              <label>Me rappeler </label>
              <textarea class="form-control" name="NomReminder"></textarea>
            </div>

            <div class="ms-form-group">
              <span class="ms-option-name fs-14">répeter chaque jour</span>
              <label class="ms-switch float-right">
                <input type="checkbox">
                <span class="ms-switch-slider round"></span>
              </label>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <input type="text" class="form-control datepicker" name="DateReminder">
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <select class="form-control" name="HeureReminder">
                    <option value="1:00 am">1:00 am</option>
                    <option value="2:00 am">2:00 am</option>
                    <option value="3:00 am">3:00 am</option>
                    <option value="4:00 am">4:00 am</option>
                    <option value="5:00 am">5:00 am</option>
                    <option value="6:00 am">6:00 am</option>
                    <option value="7:00 am">7:00 am</option>
                    <option value="8:00 am">8:00 am</option>
                    <option value="9:00 am">9:00 am</option>
                    <option value="10:00 am">10:00 am</option>
                    <option value="11:00 am">11:00 am</option>
                    <option value="12:00 pm">12:00 pm</option>
                    <option value="13:00 pm">13:00 pm</option>
                    <option value="14:00 pm">14:00 pm</option>
                    <option value="15:00 pm">15:00 pm</option>
                    <option value="16:00 pm">16:00 pm</option>
                    <option value="17:00 pm">17:00 pm</option>
                    <option value="18:00 pm">18:00 pm</option>
                    <option value="19:00 pm">19:00 pm</option>
                    <option value="20:00 pm">20:00 pm</option>
                    <option value="21:00 pm">21:00 pm</option>
                    <option value="22:00 pm">22:00 pm</option>
                    <option value="23:00 pm">23:00 pm</option>
                    <option value="00:00 am">00:00 pm</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
            <input type="submit" class="btn btn-secondary shadow-none" value="Ajouter">
          </div>
      </div>
    </div>
  </div>
  </form>


  <!-- Notes Modal -->
  <form method="POST" action="AjoutNote.php">
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">Nouvelle note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>


          <div class="modal-body">

            <div class="ms-form-group">
              <label>Titre</label>
              <input type="text" class="form-control" name="TitreNote" value="">
            </div>

            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="DescriptionNote"></textarea>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
            <input type="submit" class="btn btn-secondary shadow-none" value="Ajouter note">
          </div>
      </div>
    </div>
  </div>   
  </form>

<!-- Formulaire ajout livraison -->

<?php

include_once "../core/houaidaC.php";
include_once "../entities/houaida.php";

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sefrim";

    $conn=mysqli_connect($servername, $username,$password,$dbname);

    $livraisonC=new LivraisonC();
    $var=$_GET['id'];
    $result1=$livraisonC->RecupererCommande($var);
    
    

    foreach($result1 as $row){

    $id=$row['id'];
    $Adresse=$row['Adresse'];
    $Ville=$row['Ville'];
    $Gouvernaurat=$row['Gouvernaurat'];
    $CodePostale=$row['CodePostale'];
    $ModePaiment=$row['ModePaiment'];
    $ModeLivraison=$row['ModeLivraison'];
    $Prix=$row['Prix'];
    
   $req="SELECT Nom,Prenom from livreur where Etat=0";
   $listeLivreurs=mysqli_query($conn,$req);

   
   
                              
                                  
                                  


?>

<form method="POST" name="f2" >
<div class="col-xl-6 col-md-12">

    <div class="ms-panel ms-panel-fh" style="width: 1000px ;margin-left : 120px;">
    	 <div class="ms-panel-header">
              <h5>Ajouter Une Livraison</h5>
            </div>
      <div class="ms-panel-body">
        <form class="needs-validation clearfix" novalidate="">
          <div class="form-row">

               <div class="col-xl-12 col-md-12 ">
                  <label for="validationCustom10">Référence/ID commande</label>
                  <div class="input-group">
                    <input type="text" name="id" value="<?PHP echo $id ?>" class="form-control" id="validationCustom10" placeholder="Saisir la Référence de livraison" required="">
                    <div class="invalid-feedback"> Identifiant !</div>
                  </div>
               </div>

               <div class="col-md-6 mb-3">
                    <label for="validationCustom24">Statut</label>
                    <div class="input-group">
                      <input type="text" name="Statut" class="form-control" id="validationCustom24" placeholder="Saisir l'état de livraison" required>
                      <div class="invalid-feedback">
                        Please provide a city.
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 mb-3">
                    <label for="validationCustom24">Date Livraison </label>
                    <div class="input-group">
                      <input type="date" name="DateLivraison" class="form-control" id="verifdate" placeholder="Saisir la date de livraison" required>
                      <div class="invalid-feedback">
                        Please provide a city.
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-12 col-md-12">
                    <label for="validationCustom17" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Selecionner le Livreur</label>
                    <div class="input-group">
                      <select name="NomLivreur" class="form-control" id="validationCustom15" required="">
                          <?php  while($row=mysqli_fetch_array($listeLivreurs)){ 
                                 $nom=$row['Nom'];

                                  $prenom=$row['Prenom'];
                                 $concat=$nom." ".$prenom; ?>
                               <option value="<?php echo $concat; ?>"><?php  echo $concat; ?></option>
                      <?php }
                   
                       ?>
                           
                      </select>
                    </div>
                </div>

                 
               
           

                   


                <div class="col-md-12">
                    <button type="reset" name="reset" class="btn btn-dark mr-2  ms-graph-metrics">Vider</button>
                    <button class="btn btn-primary " type="submit" name="Ajouter" > Ajouter</button>
                 </div>

          </div>
        </form>
     </div>
   </div>
 </div>
</form>
<?PHP
  }
if (isset($_POST['Ajouter'])){
    $livraison1=new livraison($var,$Adresse,$CodePostale,$_POST['DateLivraison'],$_POST['Statut'],$ModeLivraison,$Prix,$_POST['NomLivreur'],$Ville,$ModePaiment,$Gouvernaurat);

    $livraisonC->ajouterLivraison($livraison1);
    $livraisonC->SupprimerCommande($_GET['id']);

    $houaida= $_POST['NomLivreur'];
     function before ($this, $inthat)
    {
        return substr($inthat, 0, strpos($inthat, $this));
    };
     function after ($this, $inthat)
    {
        if (!is_bool(strpos($inthat, $this)))
        return substr($inthat, strpos($inthat,$this)+strlen($this));
    };

    $name=before(' ',$houaida);
    $lastname=after(' ',$houaida);
    
     $livraisonC->miseAjour($name,$lastname);
    $email=$livraisonC->RecupererAdresseLivreur($name,$lastname);
    foreach($email as $row){
      $AdresseMail= $row['Email'];
     }
     $date=$_POST['DateLivraison'];

    echo ("<script language='javascript'>window.location.href='mail.php?mail=$AdresseMail&dateLivraison=$date&ref=$var&adrDestination=$Adresse&modeLivraison=$ModeLivraison&prix=$Prix'</script>");
}


?>


<!-- /formulaire ajout livraison -->

<script type="text/javascript">
  function verif(){
  var date=document.getElementById('verifdate').value;
 // alert(date);
  if(checkdate(date)==true){
    alert("champ date invalide");
    return false;
  }
}
</script>



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
</html>
<?php }else{
  echo ("<script language='javascript'>window.location.href='LoginAdmin.php'</script>");
} ?>



