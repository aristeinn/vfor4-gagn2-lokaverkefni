<?php

// Hérna vistum við nýjan hlut í gagnagrunn

$pdo = Connection::make();

$insertStatement = $pdo->prepare("INSERT INTO karfa(users_id, movies_id) VALUES (:users_id, :movies_id)");

$PostId = $_POST["id"];

$id = Session::get("id");


$insertStatement->bindParam(":movies_id", $PostId);

$insertStatement->bindParam(":users_id", $id);

$insertStatement->execute();

redirect('homepage');