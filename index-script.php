<?php

$con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];

$full_name = $fname . '' . $lname;

$age = $_POST['Age'];
$bgroup = $_POST['BGroup'];
$hname = $_POST['HName'];

$state = $_POST['State'];


?>