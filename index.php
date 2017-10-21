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
                    echo "OPEN";
                }
                else
                {
                    echo CLOSE;
                }
?></td>
            </tr>
             <?php } ?>
        </tbody>
    </table>
        <br><br><br>
        <div class="firstelement">
            <strong>ADD BLOOD HELP</strong>
        </div>
        <br>
        <div class="fifthelement">
            <form action="index-script.php" method="post">
                <input type='text' placeholder="First Name *" class="inputelements" name="FirstName">
                <input type='text' placeholder="Last Name *" class="inputelements" name="LastName">
                <br><br>
                <input type='number' placeholder="Age *" class="inputelements2" name="Age">
                <input type='text' placeholder="Blood Group *" class="inputelements2" name="BGroup">
                <input type='text' placeholder="Hospital Name *" class="inputelements" name="HName">
                <br><br>
                <select type='text' placeholder="State *" class="inputelements" name="State">
<option value="">Select State</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select>
                <input type='text' placeholder="City *" class="inputelements2" name="City">
                <input type='text' placeholder="Area *" class="inputelements2" name="Area">
                <br><br>
                <input type='text' placeholder="Patient's Relative Full Name *" class="inputelements" name="PRelFname">
                <input type='number' placeholder="Patient's Relative Mobile Number *" class="inputelements" name="PRelFnum">
                <br><br><br>
                <button class="submitbutton btn">Add Now</button>
            </form>
        </div>
    </div>
    </body>
</html>
