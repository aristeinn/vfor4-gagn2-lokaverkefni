<?php

//session_start();

$pdo = Connection::make();

if(isset($_POST["username"], $_POST["password"]))
{

	$username = $_POST["username"];
	$password = $_POST["password"];


	$result1 = $pdo->prepare("SELECT id, username, password FROM users WHERE username= '".$username."'");

	$result1->execute();

	$row = $result1->fetch(PDO::FETCH_OBJ);

	$hash_password = $row->password;

	$verify = password_verify($password, $hash_password);

 
	if($verify == TRUE)
	{
		Session::write("logged_in",true);
		Session::write("name", $username);
		Session::write("id", $row->id);
		redirect('/homepage');
	}
	else
	{
		redirect('/login');
	}
}