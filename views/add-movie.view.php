<?php require 'partials/head.view.php'; ?>

<h1>Add movie</h1>

<form action="/movie-post" method="POST">
		<input type="text" name="name" placeholder="Nafn">
		<input type="text" name="rating" placeholder="Einkunn">
		<input type="text" name="lang" placeholder="Tungumál">
		<button type="submit">Bæta við mynd</button>
</form>

<?php require 'partials/footer.view.php'; ?>