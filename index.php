<?php 
// index.php

session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['user_id']))
{
	header("location: logout.php");
	header("location: login.php");
}
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/all.min.css">
 	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="js-ui/jquery-ui.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 	<script type="text/javascript" src="js-ui/jquery-ui.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<br>
 		<h3 align="center">Chat Application</h3>
 		<br><br>
 		<div class="table-responsive">
 			<h4 align="center">Online User</h4>
 			<p align="right">Hi - <?php if(isset($_SESSION['username'])){echo ucwords($_SESSION['username']); } ?> - <a href="logout.php">Logout</a></p>
 			<div id="user_details">
 				
 			</div>
 		</div>
 	</div>
 	<div id="user_modal_details">
 		
 	</div>



 <script type="text/javascript" src="js/script.js"></script>
 </body>
 </html>


