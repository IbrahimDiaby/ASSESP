<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil | Association des Étudiants Sénégalais de Provence</title>
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
		<!-- header of the page -->
		<?php
		include_once("config/data.php");
		include_once("components/php/header.php");
		?>
		<!-- main of the page -->
		<main id="main">
			<!-- main slider of the page -->
			<section class="main-slider">
				<?php
				for ($i = 0; $i < 5; $i++) {
					?>
					<!-- slide of the page -->
					<div class="slide bg-full overlay" style="background-image: url(https://placehold.co/1920x700);">
						<div class="caption text-center">
							<span class="title text-uppercase">MARSEILLE</span>
							<h1 class="text-uppercase">Les 24 &amp; 25 AOUT 2025</h1>
							<span class="title text-uppercase">HOTEL DE VILLE</span>
							<span class="title text-uppercase" id="theme">Thème : Rencontre à l'hotel de ville de
								Marseille</span>
						</div>
					</div>
					<?php
				}
				?>
			</section>
			<!-- service sec of the page -->
			<section class="abt-sec style2 container">
				<div class="row holder">
					<div class="col-xs-12 col-sm-8 col-md-6">
						<h2 class="main-heading text-uppercase">Nous sommes l'ASSESP</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit, sed quia c. Eaque ipsa quae ab illo inventore veritatis et
							quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
							sit aspernatur aut odit aut fugit. </p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="img-holder">
							<img src="https://placehold.co/310x370" alt="image description" class="img-responsive">
						</div>
					</div>
				</div>
			</section>
			<!-- project sec of the page -->
			<section class="abt-sec style2 container">
				<div class="row holder">
					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="img-holder-left">
							<img src="https://placehold.co/310x370" alt="image description" class="img-responsive">
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-6">
						<h2 class="main-heading text-uppercase">Nous sommes l'ASSESP</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
							architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
							aspernatur aut odit aut fugit, sed quia c. Eaque ipsa quae ab illo inventore veritatis et
							quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
							sit aspernatur aut odit aut fugit. </p>
					</div>
				</div>
			</section>
			<!-- choose sec of the page -->
			<!-- help  sec of the page -->
			<!-- blog sec of the page -->
			<!-- partenaire sec of the page -->
			<div class="client-sec container">
				<h2 class="main-heading text-uppercase text-center">Nos Partenaires</h2>
				<div class="row">
					<div class="col-xs-12 line-box">
						<!-- client logo of the page -->
						<ul class="list-unstyled client-logo line">
							<li><a href="#"><img src="https://placehold.co/120x65" alt="logo"
										class="img-responsive"></a></li>
							<li><a href="#"><img src="https://placehold.co/120x65" alt="logo"
										class="img-responsive"></a></li>
							<li><a href="#"><img src="https://placehold.co/120x65" alt="logo"
										class="img-responsive"></a></li>
							<li><a href="#"><img src="https://placehold.co/120x65" alt="logo"
										class="img-responsive"></a></li>
							<li><a href="#"><img src="https://placehold.co/120x65" alt="logo"
										class="img-responsive"></a></li>
							<li><a href="#"><img src="https://placehold.co/120x65" alt="logo"
										class="img-responsive"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- testimonail sec of the page -->
			<div class="client-sec container">
				<h2 class="main-heading text-uppercase text-center">Témoignages</h2>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- Shop of the page -->
						<div class="shop text-center">
							<div class="img-holder">
								<img src="https://placehold.co/270x270" alt="image description" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- Shop of the page -->
						<div class="shop text-center">
							<div class="img-holder">
								<img src="https://placehold.co/270x270" alt="image description" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<!-- Shop of the page -->
						<div class="shop text-center">
							<div class="img-holder">
								<img src="https://placehold.co/270x270" alt="image description" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- Shop of the page -->
							<div class="shop text-center">
								<div class="img-holder">
									<img src="https://placehold.co/270x270" alt="image description" class="img-responsive">
								</div>
							</div>
						</div>
				</div>
			</div>
<!-- contact sec of the page -->
			<section class="contact-sec container">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<h1 class="main-heading text-uppercase text-center">Formulaire de contact</h1>
						<p class="text-center">Si vous avez des questions, n'hésitez pas à nous envoyer un message.</p>
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
		</main>
		<?php include_once("components/php/footer.php"); ?>
		<?php include_once("components/php/ui/back-top.php"); ?>
		<?php include_once("components/php/ui/loader.php"); ?>
	</div>
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
</body>

</html>