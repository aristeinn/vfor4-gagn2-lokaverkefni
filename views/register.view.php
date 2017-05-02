<?php require 'partials/head.view.php'; ?>
<div class="container">
	<div class="login">

	<h1>Búðu til aðgang</h1>

	<form method="POST" action="/register">
			<div style="font-weight: bold; color:white;">Nafn</div>
			<input type="text" name="name" placeholder="Nafn"><br><br>
			<div style="font-weight: bold; color:white;">Notendanafn</div>
			<input type="text" name="username" placeholder="Notendanafn"><br><br>
			<div style="font-weight: bold; color:white;">Lykilorð</div>
			<input type="password" name="password" placeholder="Lykilorð"><br><br>
			<button class="btn btn-primary btn-block btn-large" type="submit">Nýskrá</button>
	</form>
	<br>
	<a href="/login">Innskráning</a>
	</div>
</div>


<?php require 'partials/footer.view.php'; ?>