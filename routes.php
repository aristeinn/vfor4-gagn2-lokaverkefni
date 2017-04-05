<?php
$router->get('/', 'controllers/register.php');
$router->get('/login', 'controllers/login.php');
$router->get('/logout', 'controllers/logout.php');
//$router->get('/', 'controllers/home.php');
$router->get('/homepage', 'controllers/home.php');
$router->get('/addmovie', 'controllers/add-movie.php');
$router->get('/updatemovie', 'controllers/update-movie.php');
$router->get('/deletemovie', 'controllers/delete-movie.php');

$router->post('/register', 'controllers/register-post.php');
$router->post('/login', 'controllers/login-post.php');
$router->post('/movie-post', 'controllers/movie-post.php');
$router->post('/movie-update', 'controllers/movie-update.php');
$router->post('/movie-delete', 'controllers/movie-delete.php');

