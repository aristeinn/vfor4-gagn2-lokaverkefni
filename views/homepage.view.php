<?php

//session_start();
Session::write('title', $title);


?>
<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>
<?php $username = Session::read("name"); ?>
<div class="container">
<div class="logged_in">

	<!--<h1>Homepage</h1>-->
	<h1>Hello <?= $username; ?>, rent the movies you like!</h1>

	<table class="table table">
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
			<td>
			<form method="POST" action="/karfa-post">
				<input type="hidden" name="id" value="<?= $movie->id; ?>">
				<button type="submit" class="btn btn-primary">Rent</button>
			</form>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>
</div>
</div>

<?php require 'partials/footer.view.php'; ?>