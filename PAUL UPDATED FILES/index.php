<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once 'db_connect.php';
		?>
  	<link href="css/style.css" type="text/css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<meta charset="utf-8">
		<title>Login</title>
		<!-- Header information -->
			<div class="Header">
				<h1 id="Title">EDUM-Solutions</h1>
				<h3 id="subTitle">Education Management Solutions</h3>
			</div>
		<!--End Header -->
		</head>
		<body>
		<img class="adminIcon" src="images/admin-icon.png" alt="Admin" />
	<!-- Login form field start -->
	<div class="login">
    <form id=loginFormControl method:"POST">
				<fieldset id="loginForm">
        <legend id="formHeader">Login</legend>
        	<label id="userText" for="username">Username:</label>
        	<input id="username" type="text" name="username" required="required" placeholder="Username..."><br />

        	<label id="passText" for="password">Password:</label>
        	<input id="password" type="password" name="password" required="required" placeholder="Password..."><br />

					<select id="userType">
						<option></option>
						<option>Admin</option>
						<option>Staff</option>
						<option>Teacher</option>
						<option>Student</option>
					</select>
	 				<input class="submit" type="submit" value="Submit" />
				</fieldset>
    	</form>
		</div>
	<!-- Login form field end -->
	<!-- I wanted to have if else statements on issetPost for each option and based on that run the sql statements and also start session if num_rows exists-->
	</body>
</div>
</html>
