<!DOCTYPE html>
<html>
<head>
	<title>Opportunity Management</title>
	<style>
		
		label{
			padding: 5px;
			width: 25px;
			display: block;
			margin: auto;
		
		}
		input[type=submit]{
			margin:auto;
			display: block;
			height: 30px;
			width: 110px;
			background: #228B22;
			cursor: pointer;
		}
		input[type=text]{
			width: 240px;
	
			margin: auto;
			display: block;
		}
		form{
			height: 300px;
			width: 500px;
			background-color: #6b7b85;
			margin: auto;
			display: block;
		}

		
	</style>
</head>
<body>
	<?php require_once "connection.php"; ?>
	<h3 style="text-align: center;">Account registration</h3>
	<div class="container col-md-4">
		<form id="login" action="register.php" method="POST">
			<label>Name</label><input type="text" placeholder="Enter name"name="name" class="form-control"><br>
			<label>Username</label><input type="text" placeholder="Enter username" name="username" class="form-control"><br>
			<label>Password</label><input type="text" placeholder="Enter password" name="password" class="form-control"><br>
			<input type="submit" name="registeration" value="Create Account">

			<a href="login.php">Click here to login</a><br>
			<a href="view.php">View existing accounts</a>
		

			
		</form>
		
		
	</div>
	

</body>
</html>