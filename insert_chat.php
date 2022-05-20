<?php 
// insert_chat.php

include('db_con.php');
session_start();

$data = array(
	':to_user_id'    => $_POST['to_user_id'],
	':from_user_id'  => $_SESSION['user_id'],
	':chat_message'  => $_POST['chat_message'],
	':status'        => '1',
	':chat_time'     => time() 
);

$query = "INSERT INTO `chat_message`(`to_user_id`, `from_user_id`, `chat_message`, `status`, `chat_time`) VALUES (:to_user_id, :from_user_id, :chat_message, :status, :chat_time)";
$stmt = $con->prepare($query);

if($stmt->execute($data))
{
	echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $con);
}





 ?>