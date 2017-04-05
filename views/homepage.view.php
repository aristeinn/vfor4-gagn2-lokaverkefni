<?php

session_start();

?>
<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">

	<h1>Homepage</h1>

	<?php foreach($movies as $movie): ?>
		<li>
			<?= $movie->name; ?>
		</li>
	<?php endforeach; ?>

	<a href="/logout">Útskrá</a>

</div>

<?php require 'partials/footer.view.php'; ?>