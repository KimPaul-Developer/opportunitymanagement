<?php
	$mysqli=new mysqli('localhost', 'root','','opportunitymanagement') or die(mysqli_error ($mysqli));
	if(isset($_POST['registeration'])){
		$accname=$_POST['name'];
		$accuser=$_POST['username'];
		$accpass=$_POST['password'];
		$mysqli->query("INSERT INTO register(name,username,password) VALUE ('$accname', '$accuser','$accpass')") or die($mysqli->error);
	if(empty($accname)){
		echo "Name is required";
	}
	if(empty($accuser)){
		echo "Username is required";
	}
	if(empty($accpass)){
		echo "Password is required";
	}

	}
	
	