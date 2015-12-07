<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<title>Carnets&amp;Co </title>
	<link rel="stylesheet" href="CarnetsandCo.css"/>
	<link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="bloc_page">
	
	<?php include 'header.php'; ?>

	<section>

		<div class="intro">
			<p>Un petit mot?... </br>
			 N'hésitez pas à tapoter votre petit message dans le formulaire de contact ci-dessous.</p>
		</div>

	<form method="post" action="CarnetsandCopage4.php" class="contact">
		<label for="nom" class="info">Votre nom</label><input type="text" name="nom" id="nom" required>
		<label for="prenom" class="info">Votre prénom</label><input type="text" name="prenom" id="prenom" required>
		<label for="email" class="info">Votre email</label><input type="email" name="email" id="email" required>
		<label for="votre message" class="info">Votre message</label><textarea name="message" rows="10" cols="50" id="message" required></textarea>
		<input type="submit" name="Envoyer">
	</form>

	</section>

	<?php include 'footer.php'; ?>

	</div>
</body>
</html>