<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">

	<h1>Delete movie</h1>

	<form action="/movie-delete" method="POST">
			<input type="text" name="name" placeholder="Nafn">
			<!-- <input type="text" name="rating" placeholder="Einkunn">
			<input type="text" name="lang" placeholder="Tungumál"> -->
			<button type="submit">Delete</button>
	</form>

	<?php foreach($movies as $movie): ?>
			<li>
				<?= $movie->name; ?>
			</li>
	<?php endforeach; ?>

</div>

<?php require 'partials/footer.view.php'; ?>