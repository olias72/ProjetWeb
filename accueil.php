﻿<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Money Drop - Accueil</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="accueil.html">
		<img alt="logo" class="img-rounded" height="79" src="images/MD_logo.png" width="143"></a>
		<ul class="nav navbar-nav">
			<li><a href="theme.html">Jeu</a></li>
			<li><a href="classement.html">Classement</a></li>
			<li><a href="admin.html">Paramètres</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="inscription.html">
			<span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
			<li><a href="connexion.html">
			<span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
		</ul>
	</div>
</nav>

<?php
	phpinfo();
	/*$dom = new DomDocument();
	$dom->load('moneyDrop.xml');
	echo $dom;*/
	/*$miseDeDepart = $dom->getElementsByTagName('miseDeDepart');
	$listeMontant = $miseDeDepart->firstChild->nodeValue;
	foreach ($listeMmontant as $m) {
		echo $m->firstChild->nodeValue . "<br>";
	}*/
?>

<footer>
	<h4>Ce jeu est inspiré du jeu diffusé sur TF1</h4>
</footer>

</body>

</html>
