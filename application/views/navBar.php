<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?= base_url().'jeu/' ?>">
		<img alt="logo" class="img-rounded" height="79" src="../assets/img/MD_logo.png" width="143"></a>
		<ul class="nav navbar-nav">
			<li><a href="<?= base_url().'jeu/theme' ?>">Jeu</a></li>
			<li><a href="<?= base_url().'jeu/classement' ?>">Classement</a></li>
			<li><a href="<?= base_url().'jeu/admin' ?>">Paramètres</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?= base_url().'jeu/inscription' ?>">
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
    		<form role="form">
				<div class="form-group">
					<label class="col-lg-3 control-label" for="nom">Nom ou pseudo</label>
					<input type="text" class="form-control input-sm" name="nom" id="nom" placeholder="Nom ou Pseudo">
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label" for="password">Mot de passe</label>
					<input type="password" class="form-control input-sm" name="password" id="password" placeholder="Mot de passe">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal">Annuler</button>
			<button type="submit" class="btn btn-info">Se connecter</button>
			<!--<a href="#" data-dismiss="modal" class="btn">Close</a>
			<a href="#" class="btn btn-primary">Log-in</a>-->
		</div>			
    </div>
  </div>
</div>