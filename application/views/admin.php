<?php include("head.php"); ?>
<?php include("navBar.php"); ?>

<div class="container well center-block">
	<form role="form">
		<div class="form-group">
			<label class="control-label col-md-4">Montant de départ</label>
			<select class="form-control" name="miseDep">
				<?php include("miseDeDepart.php");?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-4">Montant des liasses</label>
			<select class="form-control" name="liasse">
				<?php include("liasses.php");?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-4">Temps de réflexion</label>
			<select class="form-control" name="tps">
				<?php include("temps.php"); ?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-4">Mode suspense</label>
			<select class="form-control" name="mode">
				<?php include("modeDeJeu.php"); ?>
			</select> </div>
		<div class="form-group pull-right">
			<input class="btn btn-primary" type="submit" value="Confirmer"> </div>
	</form>
</div>

<?php include("footer.php"); ?>