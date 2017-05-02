<?php require 'partials/head.view.php'; ?>

<div class="container">
	<div class="login">
	<h1>Innskráning</h1>
	<form method="POST" action="/login-post">
		<br>
		<div style="font-weight: bold; color:white;">Notendanafn</div>
		<input type="text" name="username" placeholder="Nafn"><br><br>
		<div style="font-weight: bold; color:white;">Lykilorð</div>
		<input type="password" name="password" placeholder="Lykilorð"><br><br>
		<button class="btn btn-primary btn-block btn-large" type="submit">Innskrá</button>
		<br>
		<br>
		<a href="/">Nýskráning</a>
		<br>
		<br>
	</form>
	</div>
</div>

<?php require 'partials/footer.view.php'; ?>