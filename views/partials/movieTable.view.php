<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Rating</th>
			<th>Language</th>
		</tr>
	</thead>
	<?php foreach($movies as $movie): ?>
	<tbody>
		<tr>
			<td>
				<?= $movie->name; ?>
			</td>
			<td>
				<?= $movie->rating; ?>
			</td>
			<td>
				<?= $movie->lang; ?>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>