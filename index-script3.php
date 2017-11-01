<?php

$con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
session_start();

$fullname = $_POST['FullName'];
$age = $_POST['Age'];
$traveldate = $_POST['TravelDate'];
$travelfrom = $_POST['TravFrom'];
$travelto = $_POST['TravTo'];
$airline = $_POST['Airline'];
$flight = $_POST['Flight'];
$rfullname = $_POST['RFullName'];
$contact = $_POST['Contact'];

$v_GenOTP = rand(100000, 999999);

$user_select_query="Insert into vtbl_trvlhlp (id, FullName, Age, TDate, FrAirport, ToAirport, Airline, FlightNo, RelFullName, RelContact, GenOTP, ActivStat, InstDateTime) values (NULL, '$fullname', '$age', '$traveldate', '$travelfrom', '$travelto', '$airline', '$flight', '$rfullname', '$contact', '$v_GenOTP', 0, NOW())";
$result = mysqli_query($con,$user_select_query);

header('Location: index-otp3.php');

?>