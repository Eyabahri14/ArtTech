<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <?php
        include "../../BACK/core/CourC.php";
        include "../../BACK/core/SeanceC.php";
        include "../../BACK/core/ParticipationC.php";
        include "../../BACK/entities/Participation.php";

        $participationC = new ParticipationC();
        $courC = new courC();
        $seanceC = new SeanceC();

        if (isset($_POST['participer'])) {
            $participation = new Participation();
            $participation->setSeance($_POST['seance']);
            $participation->setCour($_POST['cour']);
            //                $participation->setUser(this.user);
            $participation->setUser(1);
            $participationC->AjouterParticipation($participation);
//            header("Location: cour-list.php");
        }


        $list = $courC->viewCour();
        ?>
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="cour-list.php" class="nav-item nav-link active">Cours</a>
                            <a href="participations.php" class="nav-item nav-link ">Participations</a>
                            <a href="my-account.html" class="nav-item nav-link ">My Account</a>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Login</a>
                                    <a href="#" class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text"   placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="participations.php" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->  
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Cours</a></li>
                    <li class="breadcrumb-item active">Cours List</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->



        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row" style="width: 150% !important;">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="text" id="myInput" onkeyup="myFunction(<?php echo $list->rowCount() ?>)" placeholder="Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Course sort by</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a  onclick="free(<?php echo $list->rowCount() ?>)" class="dropdown-item">free</a>
                                                        <a  onclick="paid(<?php echo $list->rowCount() ?>)" class="dropdown-item">paid</a>
                                                        <a  onclick="design(<?php echo $list->rowCount() ?>)" class="dropdown-item">design</a>
                                                        <a  onclick="poterie(<?php echo $list->rowCount() ?>)" class="dropdown-item">poterie</a>
                                                        <a  onclick="sculpture(<?php echo $list->rowCount() ?>)" class="dropdown-item">sculpture</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php

                                foreach ($list as $value) {
                            ?>

                            <div class="col-md-4 mytable" >
                                <div class="product-item" onclick="console.log('CLICK');" style="border: 7px solid rgb(255,111,97);border-radius: 7px">
                                    <div class="product-title">
                                        <a href="#"><h3><div class="name"> <b>  <?php echo $value['name'] ?></b> </div></h3></a>
<!--                                        <div class="ratting">-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                        </div>-->
                                        <div style="color: wheat;   display: contents;">
                                            <div><h3 class="category"><?php echo $value['category'] ?></h3> </div>
<!--                                            <div><h3 class="category"> poterie </h3> </div>-->
                                            <div style="text-align: right !important;" ><h6 class="date_debut"> <?php echo  ($seanceC->viewSeanceById($value['seance'])->fetchAll()[0])['date_debut']; ?> </h6> </div>

                                        </div>
                                    </div>

                                    <div class="product-image">
                                        <a href="cour-detail.php?id=<?php echo $value["id"]; ?>">
                                            <img height="300" src="../../BACK/assets/coursImages/<?php echo $value['image']  ?>" alt="Product Image">
                                        </a>
<!--                                        <div class="product-action">-->
<!--                                            <a href="#"><i class="fa fa-heart"></i></a>-->
<!--                                        </div>-->
                                    </div>
                                    <div class="product-price">
                                        <h3 class="type"><?php echo $value['type'] ?></h3>


                                        <?php
                                        $seance = $seanceC->viewSeanceById($value['seance'])->fetchAll()[0];
                                        $isParticipated = $participationC->isUserParticipated(1,$value['id'],$seance['id']);
                                        if($isParticipated)
                                            echo  "<div style='color: white'> <h5> Participated !</h5></div>";
                                        else
                                            echo '
                                                    <form name="form" action="cour-list.php" method="POST">
                                                         <button class="btn btn-danger" name="participer"><i class="fa fa-shopping-cart"></i>Participate</a></button>
                                                         <input hidden  type="text" name="cour" value="'.$value['id'].'">
                                                         <input hidden  type="text" name="seance" value="'.$seance['id'].'">
                                                    </form>
                                                 '
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                        </div>
                        
                        <!-- Pagination Start -->
<!--                        <div class="col-md-12">-->
<!--                            <nav aria-label="Page navigation example">-->
<!--                                <ul class="pagination justify-content-center">-->
<!--                                    <li class="page-item disabled">-->
<!--                                        <a class="page-link" href="#" tabindex="-1">Previous</a>-->
<!--                                    </li>-->
<!--                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
<!--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                                    <li class="page-item">-->
<!--                                        <a class="page-link" href="#">Next</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </nav>-->
<!--                        </div>-->
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
<!--                    <div class="col-lg-4 sidebar">-->
<!--                        <div class="sidebar-widget category">-->
<!--                            <h2 class="title">Category</h2>-->
<!--                            <nav class="navbar bg-light">-->
<!--                                <ul class="navbar-nav">-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </nav>-->
<!--                        </div>-->
<!--                        -->
<!--                        <div class="sidebar-widget widget-slider">-->
<!--                            <div class="sidebar-slider normal-slider">-->
<!--                                <div class="product-item">-->
<!--                                    <div class="product-title">-->
<!--                                        <a href="#">Product Name</a>-->
<!--                                        <div class="ratting">-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-image">-->
<!--                                        <a href="product-detail.html">-->
<!--                                            <img src="img/product-10.jpg" alt="Product Image">-->
<!--                                        </a>-->
<!--                                        <div class="product-action">-->
<!--                                            <a href="#"><i class="fa fa-cart-plus"></i></a>-->
<!--                                            <a href="#"><i class="fa fa-heart"></i></a>-->
<!--                                            <a href="#"><i class="fa fa-search"></i></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-price">-->
<!--                                        <h3><span>$</span>99</h3>-->
<!--                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="product-item">-->
<!--                                    <div class="product-title">-->
<!--                                        <a href="#">Product Name</a>-->
<!--                                        <div class="ratting">-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-image">-->
<!--                                        <a href="product-detail.html">-->
<!--                                            <img src="img/product-9.jpg" alt="Product Image">-->
<!--                                        </a>-->
<!--                                        <div class="product-action">-->
<!--                                            <a href="#"><i class="fa fa-cart-plus"></i></a>-->
<!--                                            <a href="#"><i class="fa fa-heart"></i></a>-->
<!--                                            <a href="#"><i class="fa fa-search"></i></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-price">-->
<!--                                        <h3><span>$</span>99</h3>-->
<!--                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="product-item">-->
<!--                                    <div class="product-title">-->
<!--                                        <a href="#">Product Name</a>-->
<!--                                        <div class="ratting">-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                            <i class="fa fa-star"></i>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-image">-->
<!--                                        <a href="product-detail.html">-->
<!--                                            <img src="img/product-8.jpg" alt="Product Image">-->
<!--                                        </a>-->
<!--                                        <div class="product-action">-->
<!--                                            <a href="#"><i class="fa fa-cart-plus"></i></a>-->
<!--                                            <a href="#"><i class="fa fa-heart"></i></a>-->
<!--                                            <a href="#"><i class="fa fa-search"></i></a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="product-price">-->
<!--                                        <h3><span>$</span>99</h3>-->
<!--                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        -->
<!--                        <div class="sidebar-widget brands">-->
<!--                            <h2 class="title">Our Brands</h2>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Nulla </a><span>(45)</span></li>-->
<!--                                <li><a href="#">Curabitur </a><span>(34)</span></li>-->
<!--                                <li><a href="#">Nunc </a><span>(67)</span></li>-->
<!--                                <li><a href="#">Ullamcorper</a><span>(74)</span></li>-->
<!--                                <li><a href="#">Fusce </a><span>(89)</span></li>-->
<!--                                <li><a href="#">Sagittis</a><span>(28)</span></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        -->
<!--                        <div class="sidebar-widget tag">-->
<!--                            <h2 class="title">Tags Cloud</h2>-->
<!--                            <a href="#">Lorem ipsum</a>-->
<!--                            <a href="#">Vivamus</a>-->
<!--                            <a href="#">Phasellus</a>-->
<!--                            <a href="#">pulvinar</a>-->
<!--                            <a href="#">Curabitur</a>-->
<!--                            <a href="#">Fusce</a>-->
<!--                            <a href="#">Sem quis</a>-->
<!--                            <a href="#">Mollis metus</a>-->
<!--                            <a href="#">Sit amet</a>-->
<!--                            <a href="#">Vel posuere</a>-->
<!--                            <a href="#">orci luctus</a>-->
<!--                            <a href="#">Nam lorem</a>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script >

            function paid(size){
                let  filter,i,div,type,typeValue;
                div = document.getElementsByClassName("mytable");
                type= document.getElementsByClassName("type");
                filter = "paid".toUpperCase();

                for (i = 0; i < size; i++) {
                    typeValue = type[i].textContent || type[i].innerText;
                    // if (txtValue.toUpperCase().indexOf(filter) > -1 || prixValue.toUpperCase().indexOf(filter) > -1 ) {
                    if (typeValue.toUpperCase().indexOf(filter) > -1) {
                        div[i].style.display = "";
                    } else {
                        div[i].style.display = "none";
                    }
                }
            }
            function free(size){
                let input, filter, i, txtValue, div,name,type,typeValue;
                div = document.getElementsByClassName("mytable");
                type= document.getElementsByClassName("type");
                filter = "free".toUpperCase();

                for (i = 0; i < size; i++) {
                    typeValue = type[i].textContent || type[i].innerText;
                    // if (txtValue.toUpperCase().indexOf(filter) > -1 || prixValue.toUpperCase().indexOf(filter) > -1 ) {
                    if (typeValue.toUpperCase().indexOf(filter) > -1) {
                        div[i].style.display = "";
                    } else {
                        div[i].style.display = "none";
                    }
                }
            }

            function design(size){
                let  filter,i,div,type,typeValue;
                div = document.getElementsByClassName("mytable");
                type= document.getElementsByClassName("category");
                filter = "design".toUpperCase();

                for (i = 0; i < size; i++) {
                    typeValue = type[i].textContent || type[i].innerText;
                    // if (txtValue.toUpperCase().indexOf(filter) > -1 || prixValue.toUpperCase().indexOf(filter) > -1 ) {
                    if (typeValue.toUpperCase().indexOf(filter) > -1) {
                        div[i].style.display = "";
                    } else {
                        div[i].style.display = "none";
                    }
                }
            }

            function poterie(size){
                let  filter,i,div,type,typeValue;
                div = document.getElementsByClassName("mytable");
                category= document.getElementsByClassName("category");
                filter = "poterie".toUpperCase();

                for (i = 0; i < size; i++) {
                    typeValue = category[i].textContent || category[i].innerText;
                    // if (txtValue.toUpperCase().indexOf(filter) > -1 || prixValue.toUpperCase().indexOf(filter) > -1 ) {
                    if (typeValue.toUpperCase().indexOf(filter) > -1) {
                        div[i].style.display = "";
                    } else {
                        div[i].style.display = "none";
                    }
                }
            }

            function sculpture(size){
                let  filter,i,div,type,typeValue;
                div = document.getElementsByClassName("mytable");
                category= document.getElementsByClassName("category");
                filter = "sculpture".toUpperCase();

                for (i = 0; i < size; i++) {
                    typeValue = category[i].textContent || category[i].innerText;
                    // if (txtValue.toUpperCase().indexOf(filter) > -1 || prixValue.toUpperCase().indexOf(filter) > -1 ) {
                    if (typeValue.toUpperCase().indexOf(filter) > -1) {
                        div[i].style.display = "";
                    } else {
                        div[i].style.display = "none";
                    }
                }
            }


                function myFunction(size) {
                    console.log(size);
                let input, filter, i, txtValue, div,name,prix,prixValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                div = document.getElementsByClassName("mytable");
                name= document.getElementsByClassName("name");
                // prix= document.getElementsByClassName("prix");
                for (i = 0; i < size; i++) {
                txtValue = name[i].textContent || name[i].innerText;
                // prixValue = prix[i].textContent || prix[i].innerText;
                // if (txtValue.toUpperCase().indexOf(filter) > -1 || prixValue.toUpperCase().indexOf(filter) > -1 ) {
                if (txtValue.toUpperCase().indexOf(filter) > -1 ) {
                div[i].style.display = "";
            } else {
                div[i].style.display = "none";
            }
            }

            }
        </script>
    </body>
</html>
