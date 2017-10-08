<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/jquery.datetimepicker.css" rel="stylesheet" />
        <link href="css/timepicki.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body background = "img/back_all">
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
             <tr>
                <td>First Middle Last</td>
                <td>30</td>
                <td>B+</td>
                <td>Maharashtra</td>
                <td>Pune</td>
                <td>411001</td>
                <td>DMH Kothrud</td>
                <td>First Middle Last</td>
                <td>9000000000</td>
                <td>Open</td>
            </tr>
        </tbody>
    </table>
        <br><br><br>
        <div class="firstelement">
            <strong>ADD BLOOD HELP</strong>
        </div>
        <br>
        <div class="fifthelement">
            <form action="index-script.php">
                <input type='text' placeholder="First Name *" class="inputelements" name="FirstName">
                <input type='text' placeholder="Last Name *" class="inputelements" name="LastName">
                <br><br>
                <input type='number' placeholder="Age *" class="inputelements2" name="Age">
                <input type='text' placeholder="Blood Group *" class="inputelements2" name="BGroup">
                <input type='text' placeholder="Hospital Name *" class="inputelements" name="HName">
                <br><br>
                <input type='text' placeholder="State *" class="inputelements" name="State">
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
