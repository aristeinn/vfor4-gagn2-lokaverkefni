<?php


$pdo = Connection::make();

$statement = $pdo->prepare("DELETE FROM movies WHERE name=:name");

$statement->bindParam(':name', $_POST['name']);

$statement->execute();

redirect('homepage');