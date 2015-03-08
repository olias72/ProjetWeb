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
	<form class=" well form-horizontal col-lg-6" role="form" method="post" action="questionnaire">
		<div class="radio">
			<label><input name="theme" type="radio" value="<?= $theme->result()[$id_theme_1 - 1]->id_theme; ?>"><?php echo $theme->result()[$id_theme_1 - 1]->intitule; ?></label>
		</div>
		<div class="radio">
			<label><input name="theme" type="radio" value="<?= $theme->result()[$id_theme_2 - 1]->id_theme; ?>"><?php echo $theme->result()[$id_theme_2 - 1]->intitule; ?></label>
		</div>
		<div class="form-group">
			<button class="btn btn-primary pull-right" type="submit">Valider</button>
		</div>
	</form>
</div>