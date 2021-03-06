<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['id_livraison'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `livraison` WHERE id_livraison='".$valueToSearch."%'"; 
}
 else {
    $sql = "SELECT * FROM `livraison` WHERE id_livraison=''";   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style_table.css">

    <!-- Title -->
    <title>Design Cuisine - Livraison</title>

    <!-- Favicon -->
    <link rel="icon" href="../../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../../style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Bienvenue chez design cuisine <span class="mx-1"></span> !</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> Lun-Sam:<span class="mx-2"></span> 8.00 à 17.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Contactez_nous:<span class="mx-2"></span> (+216)  25 889 988</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo -->
                       <a class="nav-brand" href="index.html"><img class="logo" src="../../img/core-img/_logo1.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                             <div class="classynav">
                                <ul id="nav">
                                    <li> </span> <a href="../../index.html"></a><input type="image" src="../../img/core-img/home.png"class="home"/></li>
                                    <!--<li class="active"><a href="./index.html">Home</a></li>-->
                                    <li><a href="#">Produits</a>
                                        <ul class="dropdown">
                                            <li><a href="../../index.html">- Cuisine</a></li>
                                            <li><a href="../../about.html">- Dressing</a></li>
                                            <li><a href="../../service.html">- Porte</a></li>
                                            <li><a href="../../portfolio.html">- Salle de bain</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="../../portfolio.html">Portefeuille</a></li>
                                    <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                            <li><a href="../../commande.html">- commande</a></li>
                                            <li><a href="#">- Livraison</a>
                                                <ul class="dropdown">
                                                    <li><a href="../../../crud/partieClient/livraison_client.php">- livraison</a></li>
                                                    <li><a href="../../reclamation.html">- réclamation</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="../../about.html">présentation</a></li>
                                    <li><a href="../../blog.html">Blog</a></li>
                                    <li><a href="../../contact.html">Contactez_nous</a></li>
                                </ul>
                                <!--search icon -->
                                    <!--<div id="searchIcon"> 
                                    <i class="icon_search" aria-hidden="true"> </i>
                                     </div>  -->
                                <ul>
                                    <li><input type="image" src="../../img/core-img/cartee.png"class="carte"/></li>
                                    <li><input type="image" src="../../img/core-img/user.png" class="user"/></li>
                                    <li><input type="image" src="../../img/core-img/search.png"class="search"/></li>
                                    <li><input type="image" src="../../img/core-img/3bras.png"class="bars"/></li>
                                
                                </ul>
                                <!-- Cart Icon -->
                                <!--<div class="cart-icon ml-5 mt-4 mt-lg-0">
                                    <a href="#"><i class="icon_cart"></i></a>
                                </div>-->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->





    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h3 style=""> suivre vos livraisons pas a pas</h3>
               <form method="post" id="form">
	             <div >
                      <label for="id_livraison" style="top:80px;position: absolute;left:450px">id_livraison :</label>
                      <input type="text" id ="id_livraison" name="id_livraison" maxlength="9" placeholder=" code livraison" onblur="Controle(this.id)"style="top: 80px;position:absolute;"> 
                      <input type="submit" name="search" value="Filter" style="top: 80px;position:absolute;left: 750px"><br><br>

                 </div> 
	          </form>
<table class="table">
	<tr>
	<th class="ka">id_livraison</th>
	<th>id_commande</th>
	<th>adresse</th>
	<th>date</th>
	<th>suivre</th>
	</tr>
    <?php
    include "../core/livraisonC.php";
    $livraison1C=new livraisonC();
    $listeLivraison=$livraison1C->afficherLivraisons($sql);
        
foreach($listeLivraison as $row)
{
 ?>
    <tr>
    <td><?PHP echo $row['id_livraison']; ?></td>
    <td><?PHP echo $row['id_commande']; ?></td>
    <td><?PHP echo $row['adresse']; ?></td>
    <td><?PHP echo $row['date']; ?></td>
    <td><?php $today = date("Y-m-d"); if( $row['date'] > $today ) { echo "En Attente !"; } else { echo "cbon"; } ?></td>
    </tr>
<?PHP
}
?> 
</table>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="../../img/core-img/_logo1.png" alt=""></a>

                      <!--  <p class="mb-30">Design cuisine confirme son positionnement de leader sur le marché tunisien dans la fabrication de meubles sur mesure en tout genre..</p>-->

                        
                       
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Ouverture</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>lundi-samedi: 8.00 à 17.00</p>
                            <p>dimanche: 10.00 à 13.00</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>

                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contactez-nous</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Tel: (+216)  25 889 988</p>
                            <p>E-mail: commercial@designcuisine.net</p>
                            <p>Adresse: Boulevard 14 Janvier à coté galerie saidani Bizerte</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="../../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../../js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="../../js/default-assets/active.js"></script>

</body>

</html>