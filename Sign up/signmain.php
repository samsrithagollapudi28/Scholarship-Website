<?php
include 'signcon.php';
if(isset($_POST['sub']))
{
	$name=$_POST['full-name'];
	$email=$_POST['your-email'];
	$pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
	$rpass=password_hash($_POST['comfirm-password'],PASSWORD_BCRYPT);

	$emailquery="select * from signup where email='$email'";
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
			$iq="insert into signup(uname,email,pass,repass) values('$name','$email','$pass','$rpass')";
			$res=mysqli_query($con,$iq);
			if($res)
			{
?>
    		 	<script>
     			alert("Data inserted Properly");
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