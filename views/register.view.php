<?php require 'partials/head.view.php'; ?>
<div class="container">

	<h1>Búðu til aðgang</h1>

	<form method="POST" action="/register">
			<input type="text" name="name" placeholder="Nafn"><br><br>
			<input type="text" name="username" placeholder="Notendanafn"><br><br>
			<input type="password" name="password" placeholder="Lykilorð"><br><br>
			<button type="submit">Nýskrá</button>
	</form>
	<br>
	<a href="views/login.view.php">Innskráning</a>
</div>


<?php require 'partials/footer.view.php'; ?>