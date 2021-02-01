<!doctype html>
<html lang="en">
  <head>
  	<title>Edit profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style2.css">
    <style>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

/* css class for the edit profile generated errors */
.profilepress-edit-profile-status {
  width: 550px;
  text-align: center;
  background-color: #e74c3c;
  color: #ffffff;
  border-style: groove;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

.memo-edprofile-success {
  width: 550px;
  text-align: center;
  background-color: #0bdee6;
  color: #ffffff;
  border-style: groove;
  border-radius: 4px;
  font-size: 17px;
  font-weight: normal;
  line-height: 1.4;
  padding: 8px 5px;
  margin: auto;
}

#sc-edprofile {
  background: #f0f0f0;
  width: 550px;
  margin: 0 auto;
  margin-top: 8px;
  margin-bottom: 2%;
  transition: opacity 1s;
  -webkit-transition: opacity 1s;
}

#sc-edprofile h1 {
  background: #0ab38e;
  padding: 20px 0;
  font-size: 140%;
  font-weight: 300;
  text-align: center;
  color: #fff;
}

div#sc-edprofile .sc-container {
  background: #f0f0f0;
  padding: 6% 4%;
}

div#sc-edprofile input[type="email"],
div#sc-edprofile input[type="text"],div#sc-edprofile input[type="tel"],
div#sc-edprofile input[type="password"], div#sc-edprofile select, div#sc-edprofile textarea {
  width: 92%;
  background: #fff;
  margin-bottom: 4%;
  border: 1px solid #ccc;
  padding: 4%;
  font-family: 'Open Sans', sans-serif;
  font-size: 95%;
  color: #555;
}

div#sc-edprofile select {
  width: 100%;
}

div#sc-edprofile textarea {
  height: 100px;
}

div#sc-edprofile input[type="submit"] {
  width: 100%;
  background: #3399cc;
  border: 0;
  padding: 3%;
  font-family: 'Open Sans', sans-serif;
  font-size: 100%;
  color: #fff;
  cursor: pointer;
  transition: background .3s;
  -webkit-transition: background .3s;
}

div#sc-edprofile input[type="submit"]:hover {
  background: #08c284;
}
    </style>
  </head>
  <body>
		<?php
include 'appformcon.php';

$em=$_GET['emails'];
$sel = "select * from appinfo where conemail='$em'";
$quer = mysqli_query($con,$sel);
$res = mysqli_fetch_array($quer);

if(isset($_POST['sub']))
{
  $ems=$_GET['emails'];
    
    $edu=$_POST['edlevel'];
    $add=$_POST['addr'];
    $jtitle=$_POST['jtitle'];
    $gen=$_POST['gender'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $desig=$_POST['desig'];
    $father=$_POST['fname'];
    $eduqua=$_POST['edq'];
    $nation=$_POST['nation'];


    $upd= "update appinfo set edulevel='$edu' ,  conadd= '$add' , jobtitle= '$jtitle' ,  gen= '$gen' , dob= '$dob' , phoneno= '$phone' , designation= '$desig', fathername= '$father',  eduqua =  '$eduqua' ,  nationality = '$nation' where conemail='$ems' ";


            $resu=mysqli_query($con,$upd);
            if($resu)
            {
?>
                <script>
                alert("Data Updated");
                location.replace("loginweb.php");
                </script>
<?php
            }
            else
            {
?>
                <script>
                alert("Updation Failed");
                location.replace("edit.php");
                </script>
<?php
            }
        
        

    
}
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
            <a href="loginmain.php"><span class="fa fa-home mr-3"></span> Profile</a>
          </li>
          <li>
            <a href="edit.php?emails=<?php echo $res['conemail']; ?>"><span class="fa fa-cog mr-3"></span> Edit profile</a>
          </li>
          <li>
            <a href="scholarship form.php?emai=<?php echo $res['conemail']; ?>"><span class="fa fa-trophy mr-3"></span>Scholarship Form</a>
          </li>
          <li>
            <a href="lout.php"><span class="fa fa-sign-out mr-3"></span> Log Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <!--<h2 class="mb-4">Sidebar #09</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
        <div id="sc-edprofile">
          <h1 style="background-color: coral;">Edit Profile</h1>
          <div class="sc-container">
            <form action="" method="POST" >
            <input type="tel" name="phone" value="<?php echo $res['phoneno']; ?>" placeholder="Phone No" />
            <input type="text" name="addr" value="<?php echo $res['conadd']; ?>" placeholder="Address" />
            <input type="text" name="nation" value="<?php echo $res['nationality']; ?>" placeholder="Nationality" />
            <label>Date of Birth</label>
            <input type="date" name="dob" value="<?php echo $res['dob']; ?>" placeholder="Date of Birth" />
            <input type="text" name="fname" value="<?php echo $res['fathername']; ?>" placeholder="Father's Name" />
            <input type="text" name="jtitle" value="<?php echo $res['jobtitle']; ?>" placeholder="Job" />
            <div  >
              <label> Gender </label>  
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">Other</label><br><br>
               
          </div>
            <input type="text" name="edlevel" value="<?php echo $res['edulevel']; ?>" placeholder="Education Status" />
            <input type="text" name="desig" value="<?php echo $res['designation']; ?>" placeholder="Job Status" />
            <input type="text" name="edq" value="<?php echo $res['eduqua']; ?>" placeholder="Educational qualification" />
            <input type="submit" name="sub" value="Save" />
          </form>
          </div>
        </div>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>