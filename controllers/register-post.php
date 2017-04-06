<?php

$pdo = Connection::make();

$insertStatement = $pdo->prepare("INSERT INTO users(name, username, password) VALUES (:name, :username, :password)");


$password = $_POST['password'];
$hash_password = password_hash($password, PASSWORD_DEFAULT);


$insertStatement->bindParam(':name', $_POST['name']);
$insertStatement->bindParam(':username', $_POST['username']);
$insertStatement->bindParam(':password', $hash_password);

$insertStatement->execute();

redirect('login');