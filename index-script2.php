<?php

$con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
session_start();

$Category = $_POST['Category'];
$NameDetails = $_POST['NameDetails'];
$Date = $_POST['Date'];
$SpecDesc = $_POST['SpecDesc'];
$State = $_POST['State'];
$City = $_POST['City'];
$Area = $_POST['Area'];
$FName = $_POST['FName'];
$Contact = $_POST['Contact'];

$v_GenOTP = rand(100000, 999999);

$user_select_query="Insert into vtbl_msnhlp (id, Category, MsnName, MsnDate, State, City, MArea, Specifications, ContFName, MobNum, ActiveStat, GenOTP, TimeInstance) values (NULL, '$Category', '$NameDetails', '$Date', '$State', '$City', '$Area', '$SpecDesc', '$FName', '$Contact', 0, '$v_GenOTP', NOW())";        
$result = mysqli_query($con,$user_select_query);

header('Location: index-otp.php');

?>