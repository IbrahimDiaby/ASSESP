<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gallerie | Association des Étudiants Sénégalais de Provence</title>
	<!-- include the site stylesheet -->
	<link
		href="https://fonts.googleapis.com/css?family=Arizonia%7COpen+Sans:300,300i,400,400i,600,700,800%7CRoboto:300,400,500,700"
		rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script> -->
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
			<!-- project sec of the page -->
			<!-- choose sec of the page -->
			<!-- help  sec of the page -->
			<!-- blog sec of the page -->
			<!-- testimonail sec of the page -->
			<!-- client sec of the page -->
			<div class="container">
				<div class="gallery col-12">
						<img src="https://placehold.co/250x250" alt="Picture" class="img-thumbnail">
						<img src="https://placehold.co/250x250" alt="Picture" class="img-thumbnail">
						<img src="https://placehold.co/250x250" alt="Picture" class="img-thumbnail">
						<img src="https://placehold.co/250x250" alt="Picture" class="img-thumbnail">
						<img src="https://placehold.co/250x250" alt="Picture" class="img-thumbnail">
				</div>
				<div class="row pagination-content">
						<article id="content" class="content">
							<!-- nav pagination of the page -->
							<ul class="py-4 nav-pagination list-unstyled text-center">
								<li class="prev"><a href="#">Précédent</a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li class="next"><a href="#">Suivant</a></li>
							</ul>
						</article>
				</div>
			</div>
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