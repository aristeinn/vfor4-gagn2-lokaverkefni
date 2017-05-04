<?php

Session::write('title', $title);

?>
<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">
<div class="logged_in">
	<table class="table table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Rating</th>
			<th>Language</th>
		</tr>
	</thead>
	<?php foreach($karfa as $movie): ?>
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
			<td>
				<form method="POST" action="/karfa-delete">
				<input type="hidden" name="id" value="<?= $movie->id; ?>">
				<button type="submit" class="btn btn-primary">Delete</button>
			</form>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>
</div>
</div>

<?php require 'partials/footer.view.php'; ?>