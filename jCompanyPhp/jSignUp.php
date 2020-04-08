<?php

	$con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
	$email = $_POST['email'];
	$selQry="select email from company where email='$email';";	
	$selQryRst=mysqli_query($con,$selQry) or die(mysqli_error($con));
	$x=mysqli_num_rows($selQryRst);

	if($x>0)
	{
		echo "<h3>email id already exists</h3>";
		echo "After 7 seconds you will be redirected back to SignUp Page";
		header('refresh:7; url = ../includes/signup-company.php');
	}
	else
	{
		$name=$_POST['comName'];
		$year=$_POST['year'];
		$domain=$_POST['domain'];
		$pwd1=$_POST['pwd1'];
		$pwd2=$_POST['pwd2'];
		
		$sinQry="insert into company(name,year,domain,email,password) values('$name',$year,'$domain','$email','$pwd1');";
		$jCompSubmit = mysqli_query($con, $sinQry) or die(mysqli_error($con));
		// echo "<br><h3>Ur r most WELCOME</h3><br>";
		echo "Succesfull";
		header('refresh:1; url = ../includes/login.php');
	}
?>