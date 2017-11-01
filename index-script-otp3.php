<?php

$con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
session_start();

$otp = $_POST['OTP'];

$user_registration_query = "SELECT id from vtbl_trvlhlp WHERE GenOTP='$otp'";
$user_registration_submit = mysqli_query($con, $user_registration_query);

if(mysqli_num_rows($user_registration_submit)==0)
{
  $error = "Wrong OTP";
  header('location: index-otp3.php?error=' . $error);
}
else
{
    $row = mysqli_fetch_array($user_registration_submit, MYSQLI_ASSOC);
    $temp = $row['id'];
    $querry = "update vtbl_trvlhlp set ActivStat = 1 where id = $temp";
    $user_registration_submit = mysqli_query($con, $querry);
    header("location: index3.php");
}