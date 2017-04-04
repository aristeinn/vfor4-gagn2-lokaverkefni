<?php require 'partials/head.view.php'; ?>

	<h1>Homepage</h1>

	<?php foreach($movies as $movie): ?>
		<li>
			<?= $movie->name; ?>
		</li>
	<?php endforeach; ?>

<?php require 'partials/footer.view.php'; ?>