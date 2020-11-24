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

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action ="main.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">Fill your details</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Full Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="edlevel" id="edlevel" placeholder="Education Level" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="addr" id="addr" placeholder="Contact Address" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Contact Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="jtitle" id="jtitle" placeholder="Job Title" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="org" id="org" placeholder="Organisation"/>
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
                            <input type="date" class="form-input" name="dob" id="dob"/>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="phone" id="phone" placeholder="Phone No."/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="desig" id="desig" placeholder="Designation"/>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <form>
                                <input type="file" name="pic"class="form-input">
                            </form>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="fname" placeholder="Father's Name"/>
                        </div>
                        <div class="form-group">
                            <label>Employment Status</label>
                            <input type="radio" id="yes" name="estatus" value="Currently Working">
                            <label for="yes">Currently Working</label>
                            <input type="radio" id="no" name="estatus" value="Not Working">
                            <label for="no">Not Working</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="edq" id="edq" placeholder="Educational Qualification"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nation" id="nation" placeholder="Nationality"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" id="submit" class="form-submit" value="Submit"/>
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