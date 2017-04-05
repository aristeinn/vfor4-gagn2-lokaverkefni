<?php require 'partials/head.view.php'; ?>

<h1>Add movie</h1>

<form action="/movie-post" method="POST">
		<input type="text" name="name" placeholder="Nafn">
		<input type="text" name="rating" placeholder="Einkunn">
		<input type="text" name="lang" placeholder="Tungumál">
		<button type="submit">Add</button>
</form>

<?php foreach($movies as $movie): ?>
		<li>
			<?= $movie->name; ?>
		</li>
<?php endforeach; ?>

<?php require 'partials/footer.view.php'; ?>