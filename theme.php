<?php include("head.php"); ?>
<?php include("navBar.php"); ?>

<div class="container well">
	<div class="row">
		<div class="col-md-4">
			<label>Montant restant</label> </div>
		<div class="col-md-4">
			<label>Temps restant</label> </div>
		<div class="col-md-4">
			<label>Nom du joueur</label> </div>
	</div>
</div>

<div class="container well">
	<h2>Choisissez un thème</h2>
	<form class=" well form-horizontal col-lg-6" role="form">
		<div class="radio">
			<label><input name="theme" type="radio" value="1">Thème 1</label>
		</div>
		<div class="radio">
			<label><input name="theme" type="radio" value="2">Thème 2</label>
		</div>
		<div class="form-group">
			<button class="btn btn-primary pull-right" type="submit">Valider
			</button></div>
	</form>
</div>

<?php include("footer.php"); ?>