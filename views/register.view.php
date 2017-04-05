<?php require 'partials/head.view.php'; ?>

<h1>Búðu til aðgang</h1>

<form method="POST" action="/register">
		<input type="text" name="name" placeholder="Nafn"><br><br>
		<input type="text" name="username" placeholder="Notendanafn"><br><br>
		<input type="password" name="password" placeholder="Lykilorð"><br><br>
		<button type="submit">Nýskrá</button>
</form>
<br>
<a href="index.view.php">Innskráning</a>


<?php require 'partials/footer.view.php'; ?>