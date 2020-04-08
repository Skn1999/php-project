<?php
		
	// echo("arg1");	

	// $con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));

	$con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
	$email = $_POST['email'];
	$selQry="select email from institute where email='$email';";	
	$selQryRst=mysqli_query($con,$selQry) or die(mysqli_error($con));
	$x=mysqli_num_rows($selQryRst);

	// $x=$x+50;
	// echo $x;

	if($x>0)
	{
		echo "<h3>email id already exists</h3>";
		echo "You will be redirected back to SignUp Page";
		header('refresh:3; url = ../includes/signup-institute.php');
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
		// echo "<br><h3>U r most WELCOME</h3><br>";
		echo "Successful";
		header('refresh:1; url = ../includes/login.php');
	}
?>