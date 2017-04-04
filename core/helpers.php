<?php

function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function redirect($path)
{
	header("Location: /{$path}");
}

function view($file){
	$file = trim($file,"/");
	return dirname(__dir__) . "/views/{$file}.view.php";
}