<?php

$title = 'Home';

$movies = $query->all('movies');

Session::write('title', $title);

require 'views/homepage.view.php';