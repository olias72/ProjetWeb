<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="accueil.php">
		<img alt="logo" class="img-rounded" height="79" src="images/MD_logo.png" width="143"></a>
		<ul class="nav navbar-nav">
			<li><a href="theme.php">Jeu</a></li>
			<li><a href="classement.php">Classement</a></li>
			<li><a href="admin.php">Paramètres</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="inscription.php">
			<span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
			<li><a href="#connect" data-toggle="modal" data-target="#connect">
			<span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
		</ul>
	</div>
</nav>
<div class="modal fade" id="connect">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal">x</button>
    		<h4 class="modal-title">Log-in</h4>
    	</div>	
		<div class="modal-body">
    		<form class="form-inline" role="form">
				<div class="form-group">
					<label class="control-label" for="nom">Nom ou pseudo</label>
					<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom ou Pseudo">
				</div>
				<div class="form-group">
					<label class="control-label" for="password">Mot de passe</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
				</div>
					<button type="submit" class="btn btn-info">Se connecter</button>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal">Annuler</button>
			<!--<a href="#" data-dismiss="modal" class="btn">Close</a>
			<a href="#" class="btn btn-primary">Log-in</a>-->
		</div>			
    </div>
  </div>
</div>