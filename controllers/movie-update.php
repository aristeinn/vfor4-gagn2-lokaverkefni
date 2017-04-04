<?php


$pdo = Connection::make();

$statement = $pdo->prepare("UPDATE movies set name=:name, rating=:rating, lang=:lang WHERE name=:old");

$statement->bindParam(':old', $_POST['old']);
$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':rating', $_POST['rating']);
$statement->bindParam(':lang', $_POST['lang']);

$statement->execute();

redirect('homepage');