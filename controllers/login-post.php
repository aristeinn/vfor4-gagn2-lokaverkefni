<?php

//session_start();

$pdo = Connection::make();

if(isset($_POST["username"], $_POST["password"]))
{

	$username = $_POST["username"];
	$password = $_POST["password"];


	$result1 = $pdo->prepare("SELECT username, password FROM users WHERE username= '".$username."'");

	$result1->execute();

	$row = $result1->fetch(PDO::FETCH_OBJ);

	$hash_password = $row->password;

	$verify = password_verify($password, $hash_password);

	//$rows=$result1->rowCount();

 
	if($verify == TRUE)
	{
		//$_SESSION["logged_in"] = true;
		Session::write("logged_in",true);
		//$_SESSION["name"] = $username;
		Session::write("name", $username);
		redirect('/homepage');
	}
	else
	{
		redirect('/register');
		//$message = "wrong answer";
		//echo "<script type='text/javascript'>alert('$message');</script>";
	}
}