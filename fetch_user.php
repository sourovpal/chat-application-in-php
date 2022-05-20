<?php 
// fetch_user.php

include("db_con.php");

session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['user_id']))
{
	header("location: logout.php");
	header("location: login.php");
}




$output = "";
$query = "SELECT * FROM `login` WHERE user_id !='".$_SESSION['user_id']."'";

$stmt = $con->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();

$output .='
		 <table class="table table-bordered table-striped table-sm">
 			<tr>
 				<th>Username</th>
 				<th>Status</th>
 				<th>Action</th>
 			</tr>
';

foreach ($result as $row)
{
$status = '';
$current_timestamp = time()-10;
$user_last_activity = fetch_user_last_activity($row['user_id'], $con);
if($current_timestamp < $user_last_activity)
{
	$status = '<span class="text-success"><i class="fa fa-circle"></i></span>';
}
else
{
	$status = '<span class="text-danger"><i class="fa fa-circle"></span>';
}
$output .= '
			<tr>
 				<td>'.ucwords($row["username"]).''.count_unseen_message($_SESSION['user_id'], $row['user_id'], $con).' '.fetch_is_type_status($row['user_id'], $_SESSION['user_id'],$con).'</td>
 				<td>'.$status.'</td>
 				<td><button class="btn btn-info btn-sm start_chat" data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">Start Chat</button></td>
 			</tr>
';

}

$output .='</table>';


echo $output;

 ?>

