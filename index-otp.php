<!DOCTYPE html>
<html>
    <title>
	D-SHIELD Non-Profit Organisation India
    </title>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/jquery.datetimepicker.css" rel="stylesheet" />
        <link href="css/timepicki.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body background = "img/back_all">
        <?php $con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
              session_start()        
        ?>
    <center>
        <img src="img/up_header.png" class="img_dw_a_up img_dw_a">
    </center>
    <div class="main-background">
        <br><br><br>
        <div class="firstelement">
            <strong>MYACCOUNT</strong>
        </div>
        <br>
        <div class="secondelement">
            <p class="secondfirst"><strong class="insider">ACCOUNT ID </strong>: {{ }}</p>
    </div>
        <br>
        <div class="thirdelement">
            <a href="#"><button class="helpbutton-active">Blood Help</button></a>
            <a href="#"><button class="helpbutton">Missing Help</button></a>
            <a href="#"><button class="helpbutton">Travel Help</button></a>
        </div>
        <br><br><br>
        <div class="firstelement">
            <strong>BLOOD HELP</strong>
        </div>
        <br>
        <table class="table table-bordered" class="fourthelement" >
        <tbody>
            <tr>
                <th colspan="7">Patient Details</th>
        <th colspan="2">Patient Relative Details</th>
            <th>Status</th>
            <th>Share on Social Media</th>
            </tr>
            <tr class="firstrow">
                <td>Full Name</td>
                <td>Age</td>
                <td>Blood Group</td>
                <td>State</td>
                <td>City</td>
                <td>Area</td>
                <td>Hospital</td>
                <td>Full Name</td>
                <td>Mobile Number</td>
                <td></td>
                <td></td>
            </tr>
            <?php 
             $query = "Select * from vtbl_bldhlp where ActiveStat = 1 order by BldHlpID DESC";
             $result = mysqli_query($con, $query)or die($mysqli_error($con));
             while ($row = mysqli_fetch_array($result) ){
            ?>
            <tr>
                <td><?php echo $row['PatName'] ?></td>
                <td><?php echo $row['PatAge'] ?></td>
                <td><?php echo $row['PatBldGrp'] ?></td>
                <td><?php echo $row['PatState'] ?></td>
                <td><?php echo $row['PatCity'] ?></td>
                <td><?php echo $row['PatArea'] ?></td>
                <td><?php echo $row['PatHospName'] ?></td>
                <td><?php echo $row['PatRelName'] ?></td>
                <td><?php echo $row['PatRelMobNum'] ?></td>
                <td><?php if($row['ActiveStat'] == 1)
                {
                    echo "<img src=img/button_open.png / >";
                }
                else
                {
                    echo "CLOSE";
                }
?></td>
            </tr>
             <?php } ?>
        </tbody>
    </table>
        <br><br><br>
        <form action="index-script-otp.php" method="post">
            <input type='text' placeholder="Enter OTP" class="inputelements" name="OTP"> <br><br><br>
            <button class="submitbutton btn">Verify</button>
        </form>
        <br><br><br>
        <p style="margin-left: 420px;font-size: 20px;"><a href="index.php"><b>go back</b></a></p>
    </div>
</body>
</html>