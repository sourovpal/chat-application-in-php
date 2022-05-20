<?php 
// db_con.php
$con = new PDO("mysql:host=localhost; dbname=new_chat", "root", "");


function fetch_user_last_activity($user_id, $con)
{


	$query = "
			SELECT * FROM login_detalis
			WHERE user_id = '$user_id'
	";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	foreach ($result as $row)
	 {
		return $row['login_time'];
	}

}

function fetch_user_chat_history($from_user_id, $to_user_id, $con)
{
	$output ="";
	$query = "
		SELECT * FROM `chat_message`WHERE
		(from_user_id = '".$from_user_id."' AND to_user_id = '".$to_user_id."')
		OR (from_user_id = '".$to_user_id."' AND to_user_id = '".$from_user_id."')
	";

	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$output='<ul class="list-unstyled">';
	foreach ($result as  $row)
	{
		$user_name ="";
		if($row['from_user_id'] == $from_user_id)
		{
			$user_name = '<b class="text-success">You</b>';
		}
		else
		{
			$user_name = '<b class="text-danger">'.get_user_name($row['to_user_id'], $con).'</b>';
		}
		$output .='
				<li class="" style="border-bottom:1px dotted #ccc">
				<p>'.$user_name.' - '.$row["chat_message"].'
					<div align="right">
						-<small><em>'.$row["datetime"].'</em></small>
					</div>
				<p>
				</li>
		';
	}
	$output .='</ul>';

	return $output;

}





function get_user_name($user_id, $con)
{
	$query = "SELECT * FROM login WHERE user_id = '$user_id'";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	foreach ($result as $row)
	{
		return $row['username'];
	}

}


function count_unseen_message($from_user_id, $to_user_id, $con)
{
	$query = "
			SELECT * FROM chat_message
			WHERE from_user_id = '$to_user_id' AND to_user_id ='$from_user_id' AND status = '1'
	";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$count = $stmt->rowCount();
	$output ="";
	if($count > 0)
	{
		$output .='&nbsp; &nbsp;<span class="badge badge-success">'.$count.'</span>';
	}
	return $output;
}



function fetch_is_type_status($from_user_id, $to_user_id, $con)
{	
	$is_type = time()-5;

	$query = "SELECT * FROM `is_typeing` WHERE  to_user_id='".$to_user_id."' AND from_user_id='".$from_user_id."'";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	foreach ($result as $row)
	{
		if($row['is_type'] > $is_type)
		{
			return ' &nbsp;  &nbsp;<small><em>Typeing...</em></small>';
		}
	}
}


















 ?>