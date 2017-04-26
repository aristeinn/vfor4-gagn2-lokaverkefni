<?php

$title = 'Register';

$users = $query->all('users');

Session::write('title', $title);

require 'views/register.view.php';