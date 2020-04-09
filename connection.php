<?php

    // Connect
    $con=mysqli_connect("localhost", "root", null) or die(mysqli_error($con));
    // create databse
    mysqli_query($con, "CREATE DATABASE CRS");
    mysqli_query($con, "USE CRS");
    // create table company
    mysqli_query($con, "create table company ( cid int(11) primary key auto_increment, name varchar(20), year int(4), domain varchar(20), email varchar(30), password varchar(30) )" );
    // create table institute
    mysqli_query($con, "create table institute ( iid int(11) primary key auto_increment, name varchar(20), affNo int(4), email varchar(30), year int(4), password varchar(30) )" );
    // create table job
    mysqli_query($con, "create table job ( email varchar(30), name varchar(20), jobPos varchar(100), skill varchar(255), vacancies int(11), address varchar(100), salary int(11) )" );

?>
