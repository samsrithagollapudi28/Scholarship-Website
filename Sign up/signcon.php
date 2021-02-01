<?php

$user ="root";
$pass ="";
$server='localhost';
$database='signup';

$con=mysqli_connect($server,$user,$pass,$database);

if($con)
{
?>
<script>
	alert("Connection Established");
</script>
<?php
}
else
{
	die("Connection failed ");
}
?>