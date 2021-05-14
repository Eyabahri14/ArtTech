<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:17:11 GMT -->
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
  <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
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
#message1 {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message1 p {
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

<body class="ms-body ms-primary-theme ms-logged-out">



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
      <a class="pl-0 ml-0 text-center" href="../../index.html"> <img src="assets/img/dashboard/greendash-logo.png" alt="logo"> </a>
    </div>


    <!-- Navigation -->
    
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
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index.html"><img src="assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> </a>
      </div>

      

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>

    <!-- Body Content Wrapper -->
    <form action="AjouterAdmin.php" method="POST" enctype="multipart/form-data" name="f1">
    <div class="col-md-6" style="margin: auto;">
       
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Inscrivez Vous </h6>
            </div>
            <div class="ms-panel-body">
                 <div class="form-group">
                  <label for="exampleEmail1">Nom</label>
                  <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Saisir Votre Nom">
                </div>

                 <div class="form-group">
                  <label for="exampleEmail1">Prenom</label>
                  <input type="text" name="Prenom" class="form-control" id="Prenom" placeholder="Saisir Votre Prenom">
                </div>

                <div class="form-group">
                  <label for="exampleEmail1">Adresse Email</label>
                  <input type="email" name="Adresse" class="form-control" id="Adresse" placeholder="name@example.com">
                </div>

                <div class="form-group">
                  <label for="examplePassword2">Mot De Passe</label>
                  <input type="password" name="MDP" class="form-control" id="MDP" placeholder="Mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
                <div class="form-group">
                  <label for="examplePassword2">Confirmer Votre Mot De Passe</label>
                  <input type="password" name="MDPV" class="form-control" id="MDPV" placeholder="Confirmer Votre Mot De Passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
                <div id="message">
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                <div id="message1">
                    <p id="identique" class="invalid">Les Deux Mots de passe ne sont pas  <b>IDENTIQUE</b></p>

                </div>
                <div class="col-md-12 ">
                    <label for="validationCustom12">Ajouter une image de profil</label>
                    <div class="custom-file">

                      <input type="file" name="Image" class="custom-file-input" id="Image">
                      <label class="custom-file-label" for="validatedCustomFile">importer votre image..</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>

                <button type="submit" style="padding: 5px ;margin-left: 280px;" class="btn btn-pill btn-primary" onclick="return Verif();">Je M'inscris</button>
            </div>
          </div>
        </div>
        </form>
    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix" >
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

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">

          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="flaticon-secure-shield d-block"></i>
            <h1>Forgot Password?</h1>
            <p> Enter your email to recover your password </p>
            <form method="post">
              <div class="ms-form-group has-icon">
                <input type="text" placeholder="Email Address" class="form-control" name="forgot-password" value="">
                <i class="material-icons">email</i>
              </div>
              <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
            </form>
          </div>

        </div>
      </div>
    </div>

  </main>

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
var myInput = document.getElementById("MDP");
var myInput2 = document.getElementById("MDPV");
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
myInput2.onfocus = function() {
    document.getElementById("message1").style.display = "block";
}
myInput2.onblur = function() {
  document.getElementById("message1").style.display = "none";
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
if(myInput.value==myInput2.value) {
    identique.classList.remove("invalid");
    identique.classList.add("valid");
  } else if(myInput.value!=myInput2.value){
    identique.classList.remove("valid");
    identique.classList.add("invalid");
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
  function alpha(ch){
  ch = ch.toUpperCase();
  for (i=0;i<ch.length;i++)
  {
    c = ch.charAt(i);
    if (c < 'A' || c > 'Z')
      return false;
  }
  return true;
}

 function Verif(){
 var myInput = document.getElementById("Adresse");
 var v1="@";
 var v2=".";
 var pos1=myInput.value.indexOf(v1);
 var pos2=myInput.value.indexOf(v2);
 if ( (pos1 == (-1))    &&  ( pos2 == (-1)) ){
      alert("champ adresse invalide");
      return false;
  }
  var nom = document.getElementById("Nom").value;
 if(alpha(nom)==false || nom.length<3 || nom.length>30){
    alert('nom invalide');
    return false;
  }
 var prenom = document.getElementById("Prenom").value;
 if(alpha(prenom)==false || prenom.length<3 || prenom.length>30){
    alert('prenom invalide');
    return false;
  }
  
 }
</script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:17:12 GMT -->
</html>
