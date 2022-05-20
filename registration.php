<?php 
// registration.php

include('db_con.php');

if(isset($_POST['signup']))
{
	$username      =    $_POST['username'];
	$password      =    $_POST['password'];
	$re_password   =    $_POST['re_password'];
	if(!empty($username))
	{
		if(!empty($password))
		{
			if($password == $re_password)
			{
				$user_id = "1000".time();

				$query = "INSERT INTO `login`(`user_id`, `username`, `password`) VALUES ('$user_id', '$username', '$password')";
				$stmt = $con->prepare($query);
				$stmt->execute();

				$sub_query = "INSERT INTO `login_detalis`(`user_id`) VALUES ('$user_id')";
				$sub_stmt = $con->prepare($sub_query);
				$sub_stmt->execute();
			}
			else
			{
				$error = 'Re Password is Required !';
			}
		}
		else
		{
			$error = 'Password is Required !';
		}
	}
	else
	{
		$error = 'Username is Required !';
	}
}



 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/all.min.css">
 	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
 	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
 	<style type="text/css">
 		.card-body
 		{ border-top:5px solid #00e2ae;}
 		input, button
 		{box-shadow:none !important;}
 	</style>
 </head>
 <body>
 	<br><br><br><br><br><br><br><br>
 	<div class="container">
 		<div class="col-md-4 offset-md-4">
 			<div class="card">
 				<div class="card-body">
 					<div class="text-danger"><?php if(isset($error)){echo $error;} ?></div>
 					<br>
 					<form id="login_form" method="post" action="">
 						<div class="form-group">
 							<input class="form-control form-control-sm" type="text" name="username" placeholder="Username">
 						</div>
 						<div class="form-group">
 							<input class="form-control form-control-sm" type="password" name="password" placeholder="Password">
 						</div>
 						<div class="form-group">
 							<input class="form-control form-control-sm" type="password" name="re_password" placeholder="Re Password">
 						</div>
 						<div class="form-group">
 							<button class="btn btn-info btn-sm btn-block" name="signup">Signup</button>
 						</div>
 					</form>
 					<div><a class="mt-2 d-block text-center" href="login.php">Login</a></div>	
 				</div>
 			</div>
 		</div>
 	</div>


 </body>
 </html>
