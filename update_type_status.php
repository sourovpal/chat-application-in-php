<?php 
// update_type_status.php

include('db_con.php');

session_start();

$to_user_id = $_POST['to_user_id'];
$from_user_id = $_SESSION["user_id"];
$is_type = time();


$query = "SELECT * FROM `is_typeing` WHERE to_user_id='".$to_user_id."' AND from_user_id='".$from_user_id."'";

$stmt = $con->prepare($query);
$stmt->execute();

echo $stmt->rowCount();

if($stmt->rowCount() == 1)
{
	$query = " UPDATE `is_typeing` SET `is_type`='".$is_type."' WHERE  to_user_id='".$to_user_id."' AND from_user_id='".$from_user_id."'";
	$stmt = $con->prepare($query);
	$stmt->execute();
}
else
{
	$query = "INSERT INTO `is_typeing`(`to_user_id`, `from_user_id`, `is_type`) VALUES ('$to_user_id', '$from_user_id', '$is_type')";
	$stmt = $con->prepare($query);
	$stmt->execute();

}

































 ?>