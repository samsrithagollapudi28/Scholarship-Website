<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
include 'appformcon.php';
if(isset($_POST['sub']))
{
    $name=$_POST['name'];
    $edu=$_POST['edlevel'];
    $add=$_POST['addr'];
    $email=$_POST['email'];
    $jtitle=$_POST['jtitle'];
    $org=$_POST['org'];
    $gen=$_POST['gender'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $desig=$_POST['desig'];
    $file=$_FILES['pic'];
    $father=$_POST['fname'];
    $empst=$_POST['estatus'];
    $eduqua=$_POST['edq'];
    $nation=$_POST['nation'];


    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];


    if($fileerror == 0)
        {
            $destination = 'upload/'.$filename;
            move_uploaded_file($filepath, $destination);

            $iq="insert into appinfo(fullname , edulevel , conadd , conemail , jobtitle , org , gen , dob , phoneno , designation , photo , fathername , employstatus , eduqua , nationality ) values('$name' , '$edu' , '$add' , '$email' , '$jtitle' , '$org' , '$gen' , '$dob' , '$phone' , '$desig' , '$destination' , '$father' , '$empst' , '$eduqua' , '$nation')"; 
            $res=mysqli_query($con,$iq);
            if($res)
            {
?>
                <script>
                alert("Application Submitted");
                location.replace("loginweb.php");
                </script>
<?php
            }
            else
            {
?>
                <script>
                alert("Insertion Failed");
                location.replace("appform.php");
                </script>
<?php
            }
        }
        

    
}
?>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">APPLICATION FORM</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="edlevel" id="edlevel" placeholder="Education Level" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="addr" id="addr" placeholder="Contact Address" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Contact Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="jtitle" id="jtitle" placeholder="Job Title" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="org" id="org" placeholder="Organisation">
                        </div>
                        <div  >
                            <label >Gender </label>  
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label><br><br>
                             
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-input" name="dob" id="dob">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="phone" id="phone" placeholder="Phone No.">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="desig" id="desig" placeholder="Designation">
                        </div>
                        <div class="form-group">
                            
                                <input type="file" class="form-input" placeholder="Photo" name="pic" >   
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="fname" placeholder="Father's Name">
                        </div>
                        <div class="form-group">
                            <label>Employment Status</label>
                            <input type="radio" id="yes" name="estatus" value="Currently Working">
                            <label for="yes">Currently Working</label>
                            <input type="radio" id="no" name="estatus" value="Not Working">
                            <label for="no">Not Working</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="edq" id="edq" placeholder="Educational Qualification">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nation" id="nation" placeholder="Nationality">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" >
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="sub" id="submit" class="form-submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
