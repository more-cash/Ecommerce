<?php
session_start();
//if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    // L'utente è loggato
//} else {
    // L'utente non è loggato, reindirizzalo alla pagina di accesso
    //header("Location: login.php");
    //exit;
if(isset($_SESSION["username"])) {
	//header("");
	$username = $_SESSION["username"];
	$id = $_SESSION["ID"];
} else {
	$id = 0;
}
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
    <link hre="Css/animation.css" rel="stylesheet">
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
                            <li><a href=""><i class="fa fa-star"></i> Preferiti</a></li>
                            <li><a href="Checkout.php"><i class="fa fa-crosshairs"></i> Logout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Carrello</a></li>
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
										<li><a href="Checkout.php">Checkout</a></li> 
										<li><a href="Cart.php">Carrello</a></li> 
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
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>

    <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
                    <thead>
                        <tr class='cart_menu'>
                            <td class='image'>Foto</td>
                            <td class='description'></td>
                            <td class='price'>Prezzo</td>
                            <td class='quantity'>Quantità</td>
                            <td class='total'>Totale</td>
                            <td></td>
                        </tr>
                    </thead>
                <?php   
				include("ConnDB.php");
				$user = $_GET["profile"];
				$_SESSION["profile"] = $_GET["profile"];
                $sql = "SELECT * FROM articoli WHERE Codice = '$user'";//
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
						$marca = $row["Marca"];
						$modello = $row["Modello"];
						$prezzo = $row["Prezzo"];
						$quantita = $row["Quantita"];
						$codice = $row["Codice"];
						$foto = $row["Foto"];
						$locazione = $row["Locazione"];
						$condizione = $row["Condizione"];
                        
						if(isset($_SESSION["username"])) {
							$sql = "INSERT INTO carrello (Marca, Modello, Prezzo, Quantita, Codice, Foto, Locazione, Condizione, IdUtente) VALUES ('$marca', '$modello', '$prezzo', '$quantita', '$codice', '$foto', '$locazione', '$condizione', '$id')";
						} else {
							$sql = "INSERT INTO carrello (Marca, Modello, Prezzo, Quantita, Codice, Foto, Locazione, Condizione, IdUtente) VALUES ('$marca', '$modello', '$prezzo', '$quantita', '$codice', '$foto', '$locazione', '$condizione', '$id')";
						}

						//Esecuzione della query
						if (mysqli_query($conn, $sql)) {
							echo "<li><a href='Cart.php' class='active'>Macchina inserita! Clicca per visualizzare il carrello!</a></li>";
						} else {
							echo "Errore durante l'inserimento del record: " . mysqli_error($conn);
						}

                    }
                }
                ?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->



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