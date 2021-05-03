<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/prebuilt-pages/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:17:16 GMT -->
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

</head>

<body class="ms-body ms-primary-theme">

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

  <div class="ms-lock-screen-weather">
    <p>Ariana,Tunis</p>
  </div>

  <ul class="ms-lock-screen-nav">
    <li class="ms-nav-item dropdown">
      <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">email</i></a>
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
              <img src="
              assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
            </div>
            <div class="media-body">
              <span>How many people are we inviting to the dashboard?</span>
              <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
            </div>
          </a>
        <li class="dropdown-divider"></li>
        <li class="dropdown-menu-footer text-center">
          <a href="pages/apps/email.html">Go to Inbox</a>
        </li>
      </ul>
    </li>
    <li class="ms-nav-item dropdown">
      <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">notifications</i></a>
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
        <li class="dropdown-divider"></li>
        <li class="dropdown-menu-footer text-center">
          <a href="#">View all Notifications</a>
        </li>
      </ul>
    </li>
  </ul>

  <!-- Main Content -->
  <?php
        $img=$_SESSION['UPIC'];
        $nom=$_SESSION['UNAME'];
        $prenom=$_SESSION['ULNAME'];
        $adresse=$_SESSION['UEMAIL'];
         ?>
             <form method="POST" action="VerificationPin.php">
  <main class="body-content ms-lock-screen">
    <!-- Body Content Wrapper -->
    
    <div class="ms-content-wrapper">
      <img class="ms-user-img ms-img-round ms-lock-screen-user" src="<?php echo($img); ?>" alt="people">
      <h1><?php echo($prenom); ?> <?php echo($nom); ?></h1>
        <div class="ms-form-group my-0 mb-0 has-icon fs-14">
          <input type="password" class="ms-form-input" name="Pin" id="pin" placeholder="Enter Pin">
          <i class="material-icons">security</i>
        </div>
        
     

    </div>
  </main>
 </form>
<?php 
$date = date("Y-m-d");
$time = date("H:i");
?>
  <div class="ms-lock-screen-time">
    <p><?php echo ($time); ?></p>
    <p ><?php echo ($date); ?></p>
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
  <script type="text/javascript">
      function RecupVal(event){
          var x = event.which || event.keyCode;
          redirection(x);
      }
      function redirection(x){
        if(x==13){
          var res= document.getElementById('pin').value;
          if(res!=""){
          window.location.href = "VerificationPin.php" + res;
          }
        }
      }
  </script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/prebuilt-pages/lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:17:18 GMT -->
</html>
