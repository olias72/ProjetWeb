<div class="container well">
	<h2><?php echo $question->result()[$id_question - 1]->intitule; ?></h2>
	<form role="form">
		<div class="form-group">
			<?php foreach ($reponse->result() as $row) {
				echo '<label class="control-label">'.$row->intitule.'</label>';
				echo '<input class="form-control" type="number">';
			} ?>
		</div>
	</form>
</div>