<?php require 'partials/head.view.php'; ?>

<h1>Update movie</h1>

<form  action="/movie-update" method="POST">
		<select name="old">
				<?php foreach($movies as $movie): ?>
					<li>
						<option value="<?= $movie->name; ?>"><?= $movie->name; ?></option>
					</li>
				<?php endforeach; ?>
		</select>
		<input type="text" name="name" placeholder="Nafn">
		<input type="text" name="rating" placeholder="Einkunn">
		<input type="text" name="lang" placeholder="Tungumál">
		<button type="submit">Update</button>
	</form>


	<?php foreach($movies as $movie): ?>
		<li>
			<?= $movie->name; ?>
		</li>
	<?php endforeach; ?>

<?php require 'partials/footer.view.php'; ?>