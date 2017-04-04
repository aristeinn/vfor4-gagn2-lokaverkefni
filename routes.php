<?php

$router->get('/', 'controllers/home.php');
$router->get('/homepage', 'controllers/home.php');
$router->post('/movie-post', 'controllers/movie-post.php');
$router->get('/about', 'controllers/about.php');
