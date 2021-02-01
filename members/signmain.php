<?php
include 'appformcon.php';
if(isset($_POST['register']))
{
	$name=$_POST['full-name'];
	$email=$_POST['your-email'];
	$pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
	$rpass=password_hash($_POST['comfirm-password'],PASSWORD_BCRYPT);

	$emailquery="select * from signupinfo where email='$email'";
	$query=mysqli_query($con,$emailquery);

	$ecount=mysqli_num_rows($query);

	if($ecount>0)
	{
		echo "Email already exist";
	}
	else
	{
    	if($_POST['password'] === $_POST['comfirm-password'])
    	{
			$iq="insert into signupinfo(uname,email,pass,rpass) values('$name','$email','$pass','$rpass')";
			$res=mysqli_query($con,$iq);
			if($res)
			{
?>
    		 	<script>
     			alert("Data inserted Properly");
     			location.replace("appform.php");
     			</script>
<?php
	 		}
	 		else
	 		{
?>
	 			<script>
	 			alert("Insertion Failed");
	 			</script>
<?php
	 		}
	 	}
	 	else
	 	{
	 		echo "Password doesnot match";
	 	}


	}
}
?>