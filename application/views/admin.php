﻿<div class="container well center-block">
	<form role="form">
		<div class="form-group">
			<label class="control-label col-md-4">Montant de départ</label>
			<select class="form-control" name="miseDep">
				<?php foreach ($mdd as $montant) {
					echo "<option value=".$montant.">".$montant."</option>";
				} ?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-4">Montant des liasses</label>
			<select class="form-control" name="liasse">
				<?php foreach ($mdl as $liasse) {
					echo "<option value=".$liasse.">".$liasse."</option>";
				} ?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-4">Temps de réflexion</label>
			<select class="form-control" name="tps">
				<?php foreach ($tps as $temps) {
					echo "<option value=".$temps.">".$temps."</option>";
				} ?>
			</select> </div>
		<div class="form-group">
			<label class="control-label col-md-4">Mode de jeu</label>
			<select class="form-control" name="mode">
				<?php foreach ($mdj as $mode) {
					echo "<option value=".$mode.">".$mode."</option>";
				} ?>
			</select> </div>
		<div class="form-group pull-right">
			<input class="btn btn-primary" type="submit" value="Confirmer"> </div>
	</form>
</div>