﻿<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Money Drop - Administration</title>
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
<div class="container well center-block">
	<form role="form">
		<div class="form-group">
			<label class="control-label col-md-2">Montant de départ</label>
			<select class="form-control" id="first">
			<?php include("parametres.php")?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-2">Montant des liasses</label>
			<select class="form-control">
			<option></option>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-2">Temps de réflexion</label>
			<select class="form-control">
			<option></option>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-2">Mode suspense</label>
			<input name="mode" type="radio" value="o"> <label>Oui</label>
			<input name="mode" type="radio" value="n"> <label>Non</label> </div>
		<div class="form-group pull-right">
			<input class="btn btn-default" type="submit" value="Annuler">
			<input class="btn btn-primary" type="submit" value="Confirmer">
		</div>
	</form>
</div>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/script.js"></script>
</body>

</html>
