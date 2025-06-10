<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404 | Association des Étudiants Sénégalais de Provence</title>
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
			<section class="banner bg-full overlay" style="background-image: url(https://placehold.co/1920x350);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h1 class="main-heading3 text-uppercase">404</h1>
							<!-- breadcrumbs of the page -->
							<nav class="breadcrumbs text-center">
								<ul class="list-unstyled">
									<li><a href="/">Accueil</a></li>
									<li>></li>
									<li>404</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- error-page of the page -->
			<section class="error-page">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2>404</h2>
							<strong class="txt">Opps! Cette page est introuvable!</strong>
							<p>Désolé, la page que vous recherchez n'existe pas, a été supprimée ou a changé de nom.
							</p>
							<a href="/" class="btn text-center text-uppercase md-round">Revenir à l'accueil</a>
						</div>
					</div>
				</div>
			</section>
			<?php include_once("components/php/contact-box.php"); ?>
		</main>
		<?php include_once("components/php/footer2.php"); ?>
		<?php include_once("components/php/ui/back-top.php"); ?>
		<?php include_once("components/php/ui/loader.php"); ?>
	</div>
	<div class="popup-holder">
		<div id="popup1" class="lightbox">
			<form action="#" class="signup-form text-center">
				<fieldset>
					<h2>Sign in to <span class="clr">Vicin</span></h2>
					<p>Enter your details below.</p>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="EMAIL ADDRESS">
						<input type="password" class="form-control" placeholder="PASSWORD">
					</div>
					<button type="submit" class="btn text-center text-uppercase">SIGN IN</button>
					<a href="#">forgot your password?</a>
				</fieldset>
			</form>
		</div>
	</div>
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
</body>

</html>