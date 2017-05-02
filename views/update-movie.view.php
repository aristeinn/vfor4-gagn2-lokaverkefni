<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">
<div class="logged_in">

	<h1>Update movie</h1>

	<form  action="/movie-update" method="POST">
		<div class="row">
		<div class="col-md-2">
			<select name="old" class="form-control">
					<?php foreach($movies as $movie): ?>
						<li>
							<option value="<?= $movie->name; ?>"><?= $movie->name; ?></option>
						</li>
					<?php endforeach; ?>
			</select>
			</div>
		</div>
			<input type="text" name="name" placeholder="Nafn">
			<input type="text" name="rating" placeholder="Einkunn">
			<input type="text" name="lang" placeholder="Tungumál">
			<button class="btn btn-primary btn-block btn-large" type="submit">Update</button>
		</form>


		<?php require 'partials/movieTable.view.php'; ?>
</div>
</div>

<?php require 'partials/footer.view.php'; ?>