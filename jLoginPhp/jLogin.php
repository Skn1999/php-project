<?php
		
	// echo("arg1");	

	$email=$_POST['email'];
	$orgTyp=$_POST['orgTyp'];
	$pwd=$_POST['pwd'];
	// echo $pwd;
	// echo $orgTyp;

	$con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
	// mysqli_query($con, "CREATE DATABASE CRS");
	// mysqli_query($con, "USE CRS");
	session_start();



	$selQry="select * from $orgTyp where email='$email' and password='$pwd';";	
	$selQryRst=mysqli_query($con,$selQry) or die(mysqli_error($con));
	$x=mysqli_num_rows($selQryRst);

	// echo $x;

	if($x>0){

		$_SESSION['email'] = $email;
		if(strcmp($orgTyp,'institute')==0)
			header('Location: ../includes/institute.php');
		else  if(strcmp($orgTyp,'company')==0)
			header('Location: ../includes/company.php');

	}

	echo "<h3>invalid Username/Password</h3>";
	echo "After 7 seconds you will be redirected back to Login Page";
	header('refresh:7; url = ../includes/login.php');
	

?>