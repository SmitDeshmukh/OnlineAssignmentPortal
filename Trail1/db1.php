<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function openAdmin(role) {
			
			if (role=='1') {
				window.open('admin_UI.html','_self');
				
			}
			else if(role=='2')
			{
				window.open('UI_faculty.html','_self');
				
			}
			else
			{
				
				window.open('UI_student.php','_self');

			}
		}
	</script>
</head>
<body>

</body>
</html>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical_table";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user= $_POST['uname'];
$pas = $_POST['pass'];


	

$sql="select Password from demo where Userrname='$user'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$password_data=$row["Password"];
if($pas==$password_data)
{
	echo "Valid User";
	
// Set session variables
$s=$_POST["uname"];
$p=$_POST["pass"];
$c=$_POST['drop'];
$_SESSION["User"] = $s;
$_SESSION["Pwd"] = $p;
$_SESSION["Course"]=$c;
echo $s.$p.$c;
}
else {
	echo "Invalid User";
	
}


$query="select role from demo where Userrname='$user'";
//$result=$conn->query($query);
$result = $conn->query($query) or die($conn->error);
$row=$result->fetch_assoc();
$role_id=$row["role"];

if($role_id==1)
{
	echo "<html><body onload='openAdmin(1)'> </body></html>";

}
else if($role_id==2)
{
	 echo "<html><body onload='openAdmin(2)'> </body></html>";
}
else
{
	echo "<html><body onload='openAdmin(3)'> </body></html>";
}



$conn->close();
?> 