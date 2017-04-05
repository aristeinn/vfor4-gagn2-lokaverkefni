<?php

$title = 'Register';

$users = $query->all('users');

require 'views/register.view.php';