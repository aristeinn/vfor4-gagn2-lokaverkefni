<?php

//session_start();
Session::write('title', $title);

?>
<?php require 'partials/head.view.php'; ?>
<?php require 'views/partials/nav.view.php'; ?>

<div class="container">

	<h1>Homepage</h1>

	<?php require 'partials/movieTable.view.php'; ?>

</div>

<?php require 'partials/footer.view.php'; ?>