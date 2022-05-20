<?php 
// notification_alert.php

include("db_con.php");
session_start();
$to_user_id = $_SESSION['user_id'];

$query = "SELECT * FROM chat_message WHERE to_user_id = '".$to_user_id."' AND status ='0' ";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();

	foreach ($result as  $row)
	{
		echo '<audio src="ton.mp3" autoplay=""></audio>';
		echo 'sourov pal';
	}







 ?>