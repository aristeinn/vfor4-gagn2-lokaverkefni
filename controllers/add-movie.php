<?php

$title = "Add movie";

$movies = $query->all('movies');

Session::write('title', $title);

require 'views/add-movie.view.php';