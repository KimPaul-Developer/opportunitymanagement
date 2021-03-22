<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		form{
			margin: auto;
			display:block;
			height: 200px;
			width: 400px;
			background-color:#358bc4; 
		}
		label{
			padding: 5px;
			width: 50px;
			display: inline-block;
			margin: auto;
			display: block;
		}

		input[type=submit]{
			margin:auto;
			display: block;
			height: 30px;
			width: 50px;
			background: #228B22;
			cursor: pointer;
		}
		input[type=text]{
			width: 240px;
	
			margin: auto;
			display: block;
		}


	</style>
</head>
<body>
	<h3 style="text-align: center;">Welcome! Login here</h3>
	<div class="login col-md-4">
		<form id="log" action="index.html" method="POST">
			<label>Username</label><input type="text" placeholder="Enter username" name="username" class="form-control"><br>
			<label>Password</label><input type="text" placeholder="Enter password" name="password" class="form-control"><br>
			<input type="submit" name="loginbtn" value="Login">
		</form>
	</div>

</body>
</html>