<div class="container well">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th></th>
				<th>Nom du joueur</th>
				<th>Meilleur score</th>
			</tr>
		</thead>
		<tr>
			<td></td>
			<td><?= $fromModel ?></td>
			<td><?php foreach ($result as $key ) {
				echo $key. "<br>";
			} ?></td>
		</tr>
	</table>
</div>