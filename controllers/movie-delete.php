<?php


$pdo = Connection::make();

$statement = $pdo->prepare("DELETE FROM movies WHERE name=:name");

//$statement->bindParam(':old', $_POST['old']);
$statement->bindParam(':name', $_POST['name']);
//$statement->bindParam(':rating', $_POST['rating']);
//$statement->bindParam(':lang', $_POST['lang']);

$statement->execute();

redirect('homepage');