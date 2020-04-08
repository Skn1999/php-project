<?php
		
	// echo("arg1");	

	// $con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));

	$con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
	// mysqli_query($con, "CREATE DATABASE CRS");
	// mysqli_query($con, "USE CRS");
	// mysqli_query($con, "create table institute ( iid int(11) primary key auto_increment, name varchar(20), affNo int(4), email varchar(30), year int(4), password varchar(30) )" );
	$email = $_POST['email'];
	$selQry="select email from institute where email='$email';";	
	$selQryRst=mysqli_query($con,$selQry) or die(mysqli_error($con));
	$x=mysqli_num_rows($selQryRst);

	// $x=$x+50;
	// echo $x;

	if($x>0)
	{
		echo "<h3>email id already exists</h3>";
		echo "After 7 seconds you will be redirected back to SignUp Page";
		header('refresh:7; url = ../includes/signup-institute.php');
	}
	else
	{
		$name=$_POST['name'];
		$year=$_POST['year'];
		$affNO=$_POST['affNO'];
		$pwd1=$_POST['pwd1'];
		$pwd2=$_POST['pwd2'];

		$sinQry="insert into institute(name,affNO,email,year,password) values('$name',$affNO,'$email',$year,'$pwd1');";
		$jCompSubmit = mysqli_query($con, $sinQry) or die(mysqli_error($con));
		// echo $name;
		// echo $year;
		// echo $affNO;
		// echo $email;
		// echo $pwd1;
		// echo $pwd2;
		echo "<br><h3>Ur r most WELCOME</h3><br>";
		echo "After 7 seconds you will be redirected back to Login Page";
		header('refresh:7; url = ../includes/login.php');
	}
?>