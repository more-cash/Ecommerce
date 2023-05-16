<?php
session_start();
$filtro = "";
$quantity = 0;
$username = "";
if(isset($_SESSION["username"]))
    //header("");
    $username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | Nicommerce</title>
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/font-awesome.min.css" rel="stylesheet">
    <link href="Css/prettyPhoto.css" rel="stylesheet">
    <link href="Css/price-range.css" rel="stylesheet">
    <link href="Css/animation.css" rel="stylesheet">
	<link href="Css/main.css" rel="stylesheet">
	<link href="Css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"-->
	<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body class="scroll-panel">
	<form action="Filtro.php" method="POST" enctype="multipart/form-data">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +39 347 02 42 482</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@nicommerce.com</a></li>
							</ul>
						</div>
					</div>
                    <div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="Images/Logoo.png" alt="" style='width:100%;max-width:200px'/></a>
						</div>
                    </div>
                    <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav" >
                            <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="Wishlist.php"><i class="fa fa-star"></i> Preferiti</a></li>
                            <li><a href="Checkout.php"><i class="fa fa-crosshairs"></i> Logout</a></li>
                            <li><a href="Carrello.php"><i class="fa fa-shopping-cart"></i> Carrello</a></li>
							<?php
							if(isset($_SESSION["username"])) {
								echo "<li><a href='Login.php'><i class='fa fa-unlock'></i>$username</a></li>";
							} else {
								echo "<li><a href='Login.php'><i class='fa fa-lock'></i> Login</a></li>";
							}
							?>
                        </ul>
                    </div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<?php
									if(isset($_SESSION["username"])) {
										echo "<li><a href='home2.php' class='active'>Home</a></li>";
									} else {
										echo "<li><a href='index.php' class='active'>Home</a></li>";
									}
								?>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html" class="active">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="Checkout.php">Logout</a></li> 
										<li><a href="Cart.php">Cart</a></li> 
										<li><a href="Login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contattaci</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" name="filtro"/>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<!--div class='product-image-wrapper'>
					<div class='single-products'-->
				<?php                  					
					$utente = $_GET['profilo'];
					$_SESSION['profi'] = $utente;
					include("ConnDB.php");
					$sql = "SELECT * FROM articoli WHERE Codice = '$utente'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {	
							echo "<div class='col-sm-9 padding-right'>";
								echo "<div class='product-details'><!--product-details-->";
									echo "<div class='col-sm-5'>";
										echo "<div class='view-product'>";
											echo "<img src='Images/Macchine/". $row['Foto'] . "' alt='' />";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
							echo "<div class='col-sm-7'>";
								echo "<div class='product-information'>";
									echo "<h2>" . $row['Marca'] . " " . $row['Modello'] . "</h2>";
									echo "<p>Web ID: $utente </p>";
									echo "<span>";
										echo "<span>EU €" . number_format($row['Prezzo']) . " </span>";
										echo "<p>Disponibiltà: " . $row['Quantita'] . "</p>";
										echo "<button type='button' class='btn btn-fefault cart' href='Preferiti.php'>";
											echo "<i class='fa fa-shopping-cart'></i>";
											echo "Aggiungi ai preferiti";
										echo "</button>";
									echo "</span>";
									echo "<p><b>Availability: </b>" . $row['Locazione'] . "</p>";
									echo "<p><b>Condizione: </b>" . $row['Condizione'] . "</p>";
									echo "<p><b>Brand:</b> Nicommerce</p>";
									echo "<a href=''><img src='images/product-details/share.png' class='share img-responsive'  alt='' /></a>";
								echo "</div><!--/product-information-->";
							echo "</div>";
						}
					} else {
						echo "Errore durante il caricamento!";
					}
				?>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Servizi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contattaci</a></li>
								<li><a href="">Stato ordini</a></li>
								<li><a href="">Cambia posizione</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Ferrari</a></li>
								<li><a href="">Lamborghini</a></li>
								<li><a href="">Alfa Romeo</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Politiche</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Termini di utilizzo</a></li>
								<li><a href="">Privacy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Attività</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Informazioni aziendali</a></li>
								<li><a href="">Carriere</a></li>
								<li><a href="">Negozi</a></li>
								<li><a href="">Programma affiliati</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Updates</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Ricevi gli aggiornamenti più recenti <br />sul nostro sito...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2023 Nicommerce. All rights reserved.</p>
					<p class="pull-right">Designed by Myself</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<script src="JS/price-range.js"></script>
    <script src="JS/jquery.scrollUp.min.js"></script>
	<script src="JS/bootstrap.min.js"></script>
    <script src="JS/jquery.prettyPhoto.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>