<?php

//session_start();
Session::write('title', $title);


?>
<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>
<?php $username = Session::read("name"); ?>
<div class="container">
<div class="logged_in">

	<!--<h1>Homepage</h1>-->
	<h1>Hello <?= $username; ?></h1>

	<?php require 'partials/movieTable.view.php'; ?>
</div>
</div>

<?php require 'partials/footer.view.php'; ?>