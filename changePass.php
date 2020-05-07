<?php
session_start();

	$conn = new mysqli('localhost', 'root', '', 'practical_table');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }




$u=$_SESSION['User'];
$pa=$_POST['t1'];
$cpa=$_POST['t2'];

if ($pa==$cpa) {

$sql="Update users set Password='$pa' where Username='$u'";
$res=$conn->query($sql);
echo "Password Changed";
	
}
else
{
	echo "</<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<script>
	alert('Password not matched');
	</script>
	<body>
	
	</body>
	</html>";
}




?>
