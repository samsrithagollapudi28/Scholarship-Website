<!doctype html>
<html lang="en">
  <head>
  	<title>My Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
     <?php
        include 'appformcon.php';
  
        $email=$_GET['mail'];
        $sel = "select * from appinfo where conemail='$email'";
        $query = mysqli_query($con,$sel);
        $res = mysqli_fetch_array($query);
     ?>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(<?php echo $res['photo']; ?>);"></div>
	  				<h3><?php echo $res['fullname']; ?></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Profile</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Edit profile</a>
          </li>
          <li>
            <a href="scholarship form.html"><span class="fa fa-trophy mr-3"></span>Scholarship Form</a>
          </li>
          <li>
            <a href="loginweb.php"><span class="fa fa-sign-out mr-3"></span> Log Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <!--<h2 class="mb-4">Sidebar #09</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        
        
        
        
        
        <h5>Application Number:<?php echo $res['applicationno']; ?></h5>
        <h5>User Name:<?php echo $res['fullname']; ?></h5>
        <h5>Email ID:<?php echo $res['conemail']; ?></h5>
        <h5>Phone No:<?php echo $res['phoneno']; ?></h5>
        <h5>Address:<?php echo $res['conadd']; ?></h5>
        <h5>Nationality:<?php echo $res['nationality']; ?></h5>
        <h5>Date of Birth:<?php echo $res['dob']; ?></h5>
        <h5>Father's Name:<?php echo $res['fathername']; ?></h5>
        <h5>Job:<?php echo $res['jobtitle']; ?></h5>
        <h5>Gender:<?php echo $res['gen']; ?></h5>
        <h5>Education Status:<?php echo $res['edulevel']; ?> </h5>
        <h5>Job Status:<?php echo $res['employstatus']; ?> </h5>
        <h5>Education qualification:<?php echo $res['eduqua']; ?> </h5>

        
     
  
         
      

      

      </div>
		</div>
   
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>