<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">
<div class="logged_in">

	<h1>Delete movie</h1>

	<form action="/movie-delete" method="POST">
			<input type="text" name="name" placeholder="Nafn">
			<button class="btn btn-primary btn-block btn-large" type="submit">Delete</button>
	</form>

	<?php require 'partials/movieTable.view.php'; ?>
</div>
</div>

<?php require 'partials/footer.view.php'; ?>