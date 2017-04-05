<?php

$title = "Add movie";

$movies = $query->all('movies');

require 'views/add-movie.view.php';