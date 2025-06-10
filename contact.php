<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact | Association des Étudiants Sénégalais de Provence</title>
	<!-- include the site stylesheet -->
	<link
		href="https://fonts.googleapis.com/css?family=Arizonia%7COpen+Sans:300,300i,400,400i,600,700,800%7CRoboto:300,400,500,700"
		rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/colors.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<?php include_once("config/data.php");
		include_once("components/php/header2.php"); ?>
		<!-- main of the page -->
		<main id="main">
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image: url(https://placehold.co/1920x350);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="main-heading3 text-uppercase">Nous contacter</h1>
							<!-- breadcrumbs of the page -->
							<nav class="breadcrumbs text-center">
								<ul class="list-unstyled">
									<li><a href="home.php">Accueil</a></li>
									<li>></li>
									<li>Nous contacter</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- contact sec of the page -->
			<section class="contact-sec container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h3>Informations de contact</h3>
						<!-- Contact list of the page -->
						<ul class="list-unstyled contact-list">
							<li>
								<span class="icon ti-location-pin"></span>
								<address><? echo $ASSESP_DATA["location"] ?></address>
							</li>
							<li>
								<span class="icon ti-email"></span>
								<a href="mailto:<? echo $ASSESP_DATA["email"] ?>"><? echo $ASSESP_DATA["email"] ?></a>
							</li>
							<li>
								<span class="icon ti-headphone-alt"></span>
								<a href="<? echo $ASSESP_DATA["tel"] ?>"><? echo $ASSESP_DATA["tel"] ?></a>
							</li>
						</ul>
						<h3>Nos horaires d'ouvertures</h3>
						<!-- Hour list of the page -->
						<ul class="list-unstyled hour-list">
							<li>Plus proches de vous que jamais.</li>
							<li>Nous sommes ouverts 24h/7j</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-8">
						<h3 class="marg text-uppercase">Formulaire de contact</h3>
						<p>Si vous avez des questions, n'hésitez pas à nous envoyer un message.</p>
						<!-- Contact Form of the page -->
						<form action="#" class="contact-form">
							<fieldset>
								<div class="form-group">
									<div class="col">
										<input type="text" class="form-control" placeholder="Votre Nom">
									</div>
									<div class="col">
										<input type="email" class="form-control" placeholder="Votre Email">
									</div>
								</div>
								<textarea class="form-control" placeholder="Votre Message"></textarea>
								<button type="submit" class="btn text-uppercase text-center md-round">Envoyer</button>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
			<?php include_once("components/php/maps.php"); ?>
		</main>
		<?php include_once("components/php/footer2.php"); ?>
		<?php include_once("components/php/ui/back-top.php"); ?>
		<?php include_once("components/php/ui/loader.php"); ?>
	</div>
	<div class="popup-holder">
		<div id="popup1" class="lightbox">
			<form action="#" class="signup-form text-center">
				<fieldset>
					<h2>Connectez-vous <span class="clr">ASSESP</span></h2>
					<p>Entre vos informations de connexion ci-dessous.</p>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email">
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" class="btn text-center text-uppercase">Se Connecter</button>
					<a href="#">Mot de passe oublié?</a>
				</fieldset>
			</form>
		</div>
	</div>
	<script
		src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDfI624nPMEKE1g3DBAHiiFOD5pb2NB5Sk"></script>
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
</body>

</html>