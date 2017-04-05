<?php

$title = 'login';

$users = $query->all('users');

require 'views/login.view.php';