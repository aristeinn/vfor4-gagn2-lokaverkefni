<?php

$title = 'Karfa';

$pdo = Connection::make();

$statement = $pdo->prepare("SELECT m.name, m.rating, m.lang from karfa k, movies m , users u WHERE m.id = k.movies_id AND u.id = k.users_id AND k.users_id = :userId");

$id = Session::get("id");

$statement->bindParam(":userId", $id);

$statement->execute();

$karfa = $statement->fetchAll(PDO::FETCH_OBJ);

Session::write('title', $title);

require 'views/karfa.view.php';