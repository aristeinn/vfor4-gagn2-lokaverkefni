<?php

$title = "Delete movie";

$movies = $query->all('movies');

Session::write('title', $title);

require 'views/delete-movie.view.php';