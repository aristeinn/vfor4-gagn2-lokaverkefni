<?php

$router->get('/', 'controllers/home.php');
$router->get('/homepage', 'controllers/home.php');
$router->get('/addmovie', 'controllers/add-movie.php');
$router->get('/updatemovie', 'controllers/update-movie.php');

$router->post('/movie-post', 'controllers/movie-post.php');
$router->post('/movie-update', 'controllers/movie-update.php');
