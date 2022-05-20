<?php 
// fetch_chat_message.php

include('db_con.php');

session_start();


echo fetch_user_chat_history($_SESSION['user_id'], $_POST['to_user_id'], $con);

?>

