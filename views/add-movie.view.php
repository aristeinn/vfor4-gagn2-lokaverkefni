<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>
<div class="container">
<div class="logged_in">

	<h1>Add movie</h1>

	<form action="/movie-post" method="POST">
			<input type="text" name="name" placeholder="Nafn">
			<input type="text" name="rating" placeholder="Einkunn">
			<input type="text" name="lang" placeholder="Tungumál">
			<button class="btn btn-primary btn-block btn-large" type="submit">Add</button>
	</form>

	<?php require 'partials/movieTable.view.php'; ?>
	</div>
</div>

<?php require 'partials/footer.view.php'; ?>