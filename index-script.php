<?php

$con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
session_start();

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];

$fullname = $fname . ' ' . $lname;

$age = $_POST['Age'];
$bgroup = $_POST['BGroup'];
$hname = $_POST['HName'];

$state = $_POST['State'];
$city = $_POST['City'];
$area = $_POST['Area'];

$prelfname = $_POST['PRelFname'];
$prelfnum = $_POST['PRelFnum'];

$v_GenOTP = rand(100000, 999999);

$user_select_query="Insert into vtbl_bldhlp (BldHlpID,PatName,PatAge,PatBldGrp,PatArea,PatZipCd,PatHospName,PatState,PatCity,PatRelName,PatRelMobNum,GenOTP,ActiveStat,InsDateTime) VALUES (NULL,'$fullname','$age','$bgroup','$area','$area','$hname','$state','$city','$prelfname','$prelfnum','$v_GenOTP',0,NOW())";
$result = mysqli_query($con, $user_select_query);

file_get_contents("http://sms.hspsms.com/sendSMS?username=SHIELD&message=$msg&sendername=SHIELD&smstype=TRANS&numbers=$mb_no&apikey=b9e9d38d-7783-4358-8701-5deee32b1211");
$msg = "Your One Time Password is $v_GenOTP";
$mb_no = $prelfnum;


header('Location: index-otp.php')


?>