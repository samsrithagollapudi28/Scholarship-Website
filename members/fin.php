<?php
include 'fincon.php';
if(isset($_POST['sub']))
{
	$name=$_POST['nm'];
	$file=$_FILES['img'];


	$filename=$file['name'];
	$filepath=$file['tmp_name'];
	$fileerror=$file['error'];






	    
    	
       if($fileerror == 0)
        {
           	$destination = 'upload/'.$filename;
           	move_uploaded_file($filepath, $destination);
           
			
			$iq="insert into sam( name , photo) values( '$name','$destination')";
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
	 	
	 	

	
}
?>
<! Doctype html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="signup.css">
<title>MemberShip Form</title>
</head>
<body>
	<div  class="container">
	<div class="row">
	<div class="col-md-9">
	<h1>MemeberShip</h1>
	<form action="" method="POST" class="was-validated" enctype="multipart/form-data">
		<div class="form-group">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" class="form-control" placeholder="Fullname" name="nm" required>
		 <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
	    </div>
	   
	    </div>
	    <div class="form-group">
	    <i class="fa fa-lock" aria-hidden="true"></i>
		<input type="file" class="form-control" placeholder="Photo" name="img" required>
		 <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
	    </div>


	    <div class="form-group">
	    <input type="submit" class="btnregister" name="sub" value="Submit">
		</div>
	</form>
    </div>
	</div>
    </div>
	
	

</body>
</html>