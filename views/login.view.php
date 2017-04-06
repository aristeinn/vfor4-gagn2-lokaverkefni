<?php require 'partials/head.view.php'; ?>

<div class="container">
	<h1>Innskráning</h1>
	<form method="POST" action="/login-post">
		<br>
		<div style="font-weight: bold;">Notendanafn</div>
		<input type="text" name="username" placeholder="Nafn"><br><br>
		<div style="font-weight: bold;">Lykilorð</div>
		<input type="password" name="password" placeholder="Lykilorð"><br><br>
		<button type="submit">Innskrá</button>
		<br>
		<br>
		<a href="/">Nýskráning</a>
		<br>
		<br>
	</form>
</div>

<?php require 'partials/footer.view.php'; ?>