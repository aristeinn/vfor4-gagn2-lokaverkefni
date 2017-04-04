<?php

// Hérna vistum við nýjan hlut í gagnagrunn

$pdo = Connection::make();

$insertStatement = $pdo->prepare("INSERT INTO movies(name, rating, lang) VALUES (:name, :rating, :lang)");

//$statement->bindParam(':id', $_POST['id']);
$insertStatement->bindParam(':name', $_POST['name']);
$insertStatement->bindParam(':rating', $_POST['rating']);
$insertStatement->bindParam(':lang', $_POST['lang']);

$insertStatement->execute();

//header('Location: /Projects/lokaverkefni/index.php');

redirect('homepage');