<?php

$title = 'login';

$users = $query->all('users');

Session::write('title', $title);

require 'views/login.view.php';