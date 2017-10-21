<?php

$con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
session_start();

$otp = $_POST['OTP'];

$user_registration_query = "SELECT BldHlpID from vtbl_bldhlp WHERE GenOTP='$otp'";
$user_registration_submit = mysqli_query($con, $user_registration_query);

if(mysqli_num_rows($user_registration_submit)==0)
{
  $error = "Wrong OTP";
  header('location: index-otp.php?error=' . $error);
}
else
{
    $row = mysqli_fetch_array($user_registration_submit, MYSQLI_ASSOC);
    $temp = $row['BldHlpID'];
    $querry = "update vtbl_bldhlp set ActiveStat = 1 where BldHlpID = $temp";
    $user_registration_submit = mysqli_query($con, $querry);
    header("location: index.php");
}