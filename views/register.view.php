<?php require 'partials/head.view.php'; ?>
<div class="container">

	<h1>Búðu til aðgang</h1>

	<form method="POST" action="/register">
			<div style="font-weight: bold;">Nafn</div>
			<input type="text" name="name" placeholder="Nafn"><br><br>
			<div style="font-weight: bold;">Notendanafn</div>
			<input type="text" name="username" placeholder="Notendanafn"><br><br>
			<div style="font-weight: bold;">Lykilorð</div>
			<input type="password" name="password" placeholder="Lykilorð"><br><br>
			<button type="submit">Nýskrá</button>
	</form>
	<br>
	<a href="/login">Innskráning</a>
</div>


<?php require 'partials/footer.view.php'; ?>