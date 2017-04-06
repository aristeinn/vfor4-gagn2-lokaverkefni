<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">

	<h1>Delete movie</h1>

	<form action="/movie-delete" method="POST">
			<input type="text" name="name" placeholder="Nafn">
			<button type="submit">Delete</button>
	</form>

	<?php require 'partials/movieTable.view.php'; ?>

</div>

<?php require 'partials/footer.view.php'; ?>