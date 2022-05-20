<?php 
// php_login.php

session_start();
include("db_con.php");

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM `login` WHERE username=:username AND password=:password ";
	$stmt = $con->prepare($query);
	$stmt->execute(
		array(
				':username' => $username,
				':password' => $password
			 )
	);
	if($stmt->rowCount() == 1)
	{
		$row = $stmt->fetch();

		if($username == $row['username'])
		{
			if($password == $row['password'])
			{
				$login_time = time();
				$_SESSION['user_id']  = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				// $sub_query = "INSERT INTO `login_detalis`(`user_id`, `login_time`) VALUES ('".$row['user_id']."', '$login_time')";
				// $sub_stmt = $con->prepare($sub_query);
				// $sub_stmt->execute();
				// $_SESSION['login_detalis_id'] = $con->lastInsertId();
				// header("location: index.php");
			}
			else
			{
				echo "NOT"; //return jquery.js
			}
		}
		else
		{
			echo "NOT"; //return jquery.js
		}
	}
	else
	{
		echo "NOT"; //return jquery.js
	}

}



 ?>