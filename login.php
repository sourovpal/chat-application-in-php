
<?php 
// login.php

session_start();
if(isset($_SESSION['username']) && isset($_SESSION['user_id']))
{
	header("location: index.php");
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
 					<br>
 					<form id="login_form" method="post" action="">
 						<div class="form-group">
 							<input id="username" class="form-control form-control-sm" type="text" name="username" placeholder="Username">
 						</div>
 						<div class="form-group">
 							<input id="password" class="form-control form-control-sm" type="password" name="password" placeholder="Password">
 						</div>
 						<div class="form-group">
 							<button class="btn btn-info btn-sm btn-block">login</button>
 						</div>
 					</form>
 					<div><a class="mt-2 d-block text-center" href="registration.php">Registration</a></div>
 				</div>
 			</div>
 		</div>
 	</div>









 <script type="text/javascript" src="js/script.js"></script>
 </body>
 </html>