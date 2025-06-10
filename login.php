<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Se Connecter | Association des Étudiants Sénégalais de Provence</title>
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
		<?php include_once("config/data.php"); ?>
		<!-- main of the page -->
		<main id="main">
			<!-- login sec of the page -->
			<section class="login-sec">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<form action="#" class="signup-form text-center">
								<a href="/" class="py-4"><img src="images/logo-assesp.png" alt="ASSESP" title="Accueil" class="img-responsive"></a>
								<fieldset>
									<h2 class="text-uppercase">Connectez-vous au dashboard <span
											class="clr">ASSESP</span></h2>
									<p>Entrez vos informations administrateur ci-dessous.</p>
									<div class="form-group">
										<input type="email" class="form-control"
											placeholder="<?php echo $ASSESP_DATA["email"] ?>">
										<input type="password" class="form-control"
											placeholder="************************">
									</div>
									<button type="submit" class="btn text-center text-uppercase">Se connecter</button>
									<a href="#">Mot de passe oublié?</a>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	<!-- include jQuery -->
	<script src="js/jquery.js"></script>
	<!-- include jQuery -->
	<script src="js/plugins.js"></script>
	<!-- include jQuery -->
	<script src="js/jquery.main.js"></script>
</body>

</html>