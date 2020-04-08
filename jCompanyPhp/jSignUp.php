<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/main.css">
	<title>Redirecting</title>
</head>
<body>
<?php
		
		// echo("arg1");	
		
		
	
		$con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
		$email = $_POST['email'];
		$selQry="select email from company where email='$email';";	
		$selQryRst=mysqli_query($con,$selQry) or die(mysqli_error($con));
		$x=mysqli_num_rows($selQryRst);
	
		// $x=$x+50;
		// echo $x;
	
		if($x>0)
		{
			echo "<h3>email id already exists</h3>";
			echo "After 3 seconds you will be redirected back to SignUp Page";
			header('refresh:3; url = ../includes/signup-company.php');
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
			echo "<br><div class='container'><h3 class='heading'>Thanks for registering.</h3><br>";
			echo "<p class='para'>After 3 seconds you will be redirected back to Login Page</p></div>";
			header('refresh:7; url = ../includes/login.php');
		}
	?>
</body>
</html>

<?php
		
	// echo("arg1");	
	
	

	$con=mysqli_connect("localhost", "root", null, "CRS") or die(mysqli_error($con));
	$email = $_POST['email'];
	$selQry="select email from company where email='$email';";	
	$selQryRst=mysqli_query($con,$selQry) or die(mysqli_error($con));
	$x=mysqli_num_rows($selQryRst);

	// $x=$x+50;
	// echo $x;

	if($x>0)
	{
		echo "<h3>email id already exists</h3>";
		echo "After 3 seconds you will be redirected back to SignUp Page";
		header('refresh:3; url = ../includes/signup-company.php');
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
		echo "<br><div class='container'><h3 class='heading'>Thanks for registering.</h3><br>";
		echo "<p class='para'>After 3 seconds you will be redirected back to Login Page</p></div>";
		header('refresh:7; url = ../includes/login.php');
	}
?>