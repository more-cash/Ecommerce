<?php
session_start();
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
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
					<div class="col-sm-6">
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
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="Checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="Cart.php" class="active"><i class="fa fa-shopping-cart"></i> Carrello</a></li>
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
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html" class="active">Cart</a></li> 
										<?php
										if(isset($_SESSION["username"])) {
											echo "<li><a href='Login.php'><i class='fa fa-unlock'></i>$username</a></li>";
										} else {
											echo "<li><a href='Login.php'><i class='fa fa-lock'></i> Login</a></li>";
										}
										?> 
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
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Carrello</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
                    <?php         
					$sommaPrezzi = 0;
					$quantity = 1;
					$index = 1;
					include("ConnDB.php");
					$sql = "SELECT * FROM preferiti where IdUtente = $id";
					$result = $conn->query($sql);
					
					echo "<thead>";
					echo "<tr class='cart_menu'>
							<td class='image'>Prodotti</td>
							<td class='description'></td>
							<td class='price'>Prezzo</td>
							<td class='quantity'>Quantità</td>
							<td class='total'>Totale</td>
							<td></td>
						</tr>
					</thead>";
					
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$price = $row["Prezzo"];
							echo "<tbody>";
							echo "<tr>";
							echo "<td class='cart_product'>";
							echo "<a href=''><img src='Images/Macchine/" . $row['Foto'] . "' alt=''></a>";
							echo "</td>";
							echo "<td class='cart_description'>";
							echo "<h4><a href=''>" . $row['Marca'] . " " . $row['Modello'] . "</a></h4>";
							echo "<p>Web ID: 1089772</p>";
							echo "</td>";
							echo "<td class='cart_price'>";
							echo "<p>" . $row['Prezzo'] . "€" . "</p>";
							echo "</td>";
							echo "<td class='cart_quantity'>";
							echo "<div class='cart_quantity_button'>";
							echo "<a class='cart_quantity_up' onclick='updateQuantity(1, $index, $price)'> + </a>";
							echo "<input class='cart_quantity_input' type='text' name='quantity[]' value='$quantity' autocomplete='off' size='2'>";
							echo "<a class='cart_quantity_down' onclick='updateQuantity(-1, $index, $price)'> - </a>";
							echo "</div>";
							echo "</td>";
							$quantit = $quantity * $row['Prezzo'];
							echo "<td class='cart_total'>";
							echo "<p class='cart_total_price' id='pQuantita" . $index . "'>$quantit" . "€" . "</p>";
							echo "</td>";
							echo "<td class='cart_delete'>";
							echo "<a class='cart_quantity_delete' href='Cancella.php'><i class='fa fa-times'></i></a>";
							echo "</td>";
							echo "</tr>";
							echo "</tbody>";
							$sommaPrezzi += $quantit;
							$index++;
								}
							} else {
								echo "Errore durante il caricamento!";
							}
                        ?>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Acquista in tutta sicurezza!</h3>
				<p>Verrà addebitato un costo per la spedizione della macchina direttamente a casa sua</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Totale auto:<span id="spanTot"><?php echo $sommaPrezzi . "€";?></span></li>
							<li>Tassa spedizione: <span>50€</span></li>
							<li>Totale tutto incluso: <span id="spanTot2"><?php echo $sommaPrezzi + 50 . "€";?></span></li>
						</ul>
							<a class="btn btn-default update" href="">Acquista</a>
							<a class="btn btn-default check_out" href="Checkout.php">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script>
		function updateQuantity(change, inputIndex, prezzo) {
			var quantityInputs = document.getElementsByName("quantity[]");
			var currentQuantity = parseInt(quantityInputs[inputIndex - 1].value);
			
			// Aggiorna il valore della quantità
			var newQuantity = currentQuantity + change;
			if (newQuantity >= 1) {
			quantityInputs[inputIndex - 1].value = newQuantity;
			}

			// Calcola il nuovo totale basato sulla quantità e il prezzo unitario
			var newTotal = newQuantity * prezzo;
			document.getElementById("pQuantita" + inputIndex).textContent = newTotal + "€";
			calcolaTotale();
		}
		
		function calcolaTotale() {
			var quantitaElements = document.getElementsByClassName('cart_quantity_input');
			var prezziElements = document.getElementsByClassName('cart_price');

			var totale = 0;
			for (var i = 0; i < quantitaElements.length; i++) {
			var quantita = parseInt(quantitaElements[i].value);
			var prezzo = parseFloat(prezziElements[i].innerText);
			var subtotal = quantita * prezzo;
			totale += subtotal;
			}

			document.getElementById('spanTot').innerText = totale + "€";
			document.getElementById('spanTot2').innerText = totale + 50 + "€";
		}
	</script>
</body>
</html>