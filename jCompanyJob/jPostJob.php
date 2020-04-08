<?php
		
	// echo("arg1");	

	$jobPos=$_POST['jobPosition'];
	$skill=$_POST['skills'];
	$vacancy=$_POST['vacancy'];
	$addr=$_POST['location'];
	$salary=$_POST['salary'];

	$con=mysqli_connect("localhost", "root", "root@123", "CRS") or die(mysqli_error($con));
	session_start();

	$email=$_SESSION['email'];

	$selQry = "select * from company where email='$email';";
    $selQryRst = mysqli_query($con,$selQry) or die(mysqli_error($con));
    $row = mysqli_fetch_array($selQryRst);

    $name=$row['name'];


	$sinQry="insert into job values('$email','$name','$jobPos','$skill',$vacancy,'$addr',$salary);";
	$jCompSubmit = mysqli_query($con, $sinQry) or die(mysqli_error($con));


	// echo $jCompSubmit;
	// echo $name;
	// echo $jobPos;
	// echo $skills;
	// echo $email;
	// // echo $eligibility; --removed
	// echo $vacancy;
	// echo $addr;

	header('location: ../includes/company.php');
?>