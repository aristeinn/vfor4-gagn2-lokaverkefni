<?php require 'partials/head.view.php'; ?>
<div class="container">
	<div class="login">

	<h1>Nýskráning</h1>

	<form method="POST" action="/register">
			<label style="font-weight: bold; color:white;">Nafn</label>
			<input type="text" name="name" placeholder="Nafn"><br><br>
			<label style="font-weight: bold; color:white;">Notandanafn</label>
			<input type="text" name="username" placeholder="Notandanafn"><br><br>
			<label style="font-weight: bold; color:white;">Lykilorð</label>
			<input type="password" name="password" placeholder="Lykilorð"><br><br>
			<button class="btn btn-primary btn-block btn-large" type="submit">Nýskrá</button>
			<br>
			<a href="/login">Innskráning</a>
	</form>
	
	</div>
</div>


<?php require 'partials/footer.view.php'; ?>