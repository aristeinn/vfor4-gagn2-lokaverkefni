<?php

require 'core/bootstrap.php';

$query = new QueryBuilder();

Session::start();

require Router::load('routes.php')->direct(Request::uri(), Request::method());