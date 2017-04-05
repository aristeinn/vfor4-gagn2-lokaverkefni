<?php

$title = "Delete movie";

$movies = $query->all('movies');

require 'views/delete-movie.view.php';