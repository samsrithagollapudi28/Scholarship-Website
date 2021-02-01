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
                location.replace("profile.php");
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