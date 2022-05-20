<?php 
// update_last_activity.php

include('db_con.php');

session_start();
$login_time = time();
$session = $_SESSION["user_id"];
$query = "UPDATE `login_detalis`SET login_time = :login_time	WHERE user_id = :user_id";

$stmt = $con->prepare($query);
$stmt->execute(
	array(
		':login_time'  => $login_time,
		':user_id' => $session
	)
);



?>

