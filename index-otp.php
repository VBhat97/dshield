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
        <link rel="stylesheet" href="css/main.css" />
        <link href="css/timepicki.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body background = "img/back_all">
        <?php $con = mysqli_connect("localhost","root","","dshield") or die(mysqli_error($con));
              session_start()        
        ?>
                <header id="header">

					<nav id="head-nav" class="navbar topnavbar navbar-fixed-top affix-top" role="navigation" data-spy="affix" data-offset-top="200">
						<div class="container_head container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button>
								<a href="Default.aspx" class="navbar-brand header">
                                <img src="img/logo.png" alt="" class="log_main">
                                </a>
							</div> <!-- /#navbar-header -->

							<!-- Navigation -->
                            
                            <div class="nav_up_text"> 
                            	<div class="nav_up_left">
                                     

                                    <div class="loc_up_wrp cmpny_adre_div">
                                        <i class="fa fa-map-marker"></i> 
                                        <span> Non Profit Registered in Buffalo, WY, USA  &amp;  Pune, Maharashtra, INDIA </span>
                                        <div class="clear"></div>
                                    </div>
                                    
                                    <div class="loc_up_wrp">
                                        <i class="fa fa-mobile"></i>
                                        <span> <img src="img/usa_flag.jpg" style="display:inline-block;/* margin-right:5px; */width: 17px;margin-top: -3px;"> 940-343-8582  &nbsp;/&nbsp; </span>
                                          <span> <img src="img/india_flag.jpg" style="display:inline-block;/* margin-right:5px; */width: 17px;margin-top: -3px;"> 942-132-8582 </span>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="loc_up_wrp">
                                        <i class="fa fa-envelope"></i>
                                        <span> Send email : support@d-shield.org  </span>
                                        <div class="clear"></div>
                                	</div>
                                    
                                    <div class="loc_up_wrp">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                        
                                         <a href="donate-now.aspx" class="cls_hd_my_ac"> Login </a>
                                        
                                        <div class="clear"></div>
                                	</div>

                                   



                                	<div class="clear"></div>
                                </div>
                                <div class="nav_up_right">
                                	<a href=" https://www.facebook.com/dshieldngo">
                                    	<img src="images/facebook01.png" title="Facebook">
                                        
                                    </a>
                                    
                                    <a href="https://plus.google.com/u/0/108024571845256566597">
                                    
                                        <img src="images/google-plus01.png" title="Google-plus">
                                    </a>
                                    
                                    <a href="https://www.twitter.com/dshieldngo">
                                       
                                        <img src="images/twitter01.png" title="Twitter">
                                    </a>
                                    
                                    <a href="https://www.youtube.com/channel/UC0tdM540Svd01lVuBq9lDZw">
                                       
                                        <img src="images/youtube01.png" title="YouTube">

                                    </a>
                                    <div class="clear"></div>
                                </div>
                                
                            
                            <div class="clear"></div>
                            </div>
							<div class="collapse navbar-collapse" id="navbar">
								<ul class="nav pull-right navbar-nav" id="main_navigation_menu">
									<li><a class="bord_n" href="Default.aspx">HOME</a></li>
									<li><a href="about_us.aspx">ABOUT US</a></li>
                                    

									<li><a href="projects.aspx">PROJECTS</a></li>

                                    
									
									<li><a href="events.aspx">EVENTS</a></li>
									<li><a href="donate-now.aspx">DONATE NOW</a></li>
									<li><a href="affiliates.aspx">SHOP 'N' HELP</a></li>
                                    <li><a href="helpboard.php">HELPBOARD</a></li>
									<li><a href="contact_us.aspx">CONTACT</a></li>
								</ul>
                                <div class="clear"></div>
                                
                                
							</div>
                            
						</div>
					</nav> <!-- /#navbar -->
				
                <div class="latest_news_wrp">
                                	<div class="main_wrp_a"> 
                                         
                                    	<div class="lats_news_hd">
                                        	
                                      <span class="lats_news_hd1"><i>From The Organization : </i></span>
                                        	<marquee class="marq_a">

<span class="marq_a_text"><i class="fa fa-circle"></i> <i>These are free services with an option to make courtesy donation. </i></span>					                                                
                                            <span class="marq_a_text"><i class="fa fa-circle"></i> <i>Check our "Shop N Help" section above for indirect donations.</i></span>
                                            
                                            <span class="marq_a_text"><i class="fa fa-circle"></i> <i>Send "DSHIELD RPRT:BLOOD" to 9220592205 to report Blood Help in your area. </i></span>
											
											<span class="marq_a_text"><i class="fa fa-circle"></i> <i>Send "DSHIELD RPRT:MISSING" to 9220592205 to report someone missing. </i></span>
											<span class="marq_a_text"><i class="fa fa-circle"></i> <i>Send "DSHIELD RPRT:TRAVEL COMPANION" to 9220592205 to find travel companions for elder ones. </i></span> 						
                                          </marquee>
                                           
                                            <a href="news.aspx" class="viewlink">View All</a>
                                    	</div>
                                        
                                    </div>
                                </div>

                
                
			</header> <!-- /#header -->
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