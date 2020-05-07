<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function openAdmin(role) {
			
			if (role=='1') {
				window.open('admin_UI.php','_self');
				
			}
			else if(role=='2')
			{
				window.open('UI_teacher1.php','_self');
				
			}
			else if(role=='3')
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


	

$sql="select Password from users where Username='$user'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$password_data=$row["Password"];
if($pas==$password_data)
{
	echo "Valid User";
	
// Set session variables

$dt=date("d-m-y");

$s=$_POST["uname"];
$p=$_POST["pass"];
$c=$_POST['drop'];
$_SESSION["User"] = $s;
$_SESSION["Pwd"] = $p;
$_SESSION["Course"]=$c;
echo $s.$p.$c.$dt;



$query="select Role from users where Username='$user'";
$result=$conn->query($query);
$row=$result->fetch_assoc();
$role_id=$row["Role"];

if($role_id==1)
{
	echo "<html><body onload='openAdmin(1)'> </body></html>";

}
else if($role_id==2)
{
	 echo "<html><body onload='openAdmin(2)'> </body></html>";
}
else if($role_id==3)
{
	echo "<html><body onload='openAdmin(3)'> </body></html>";
}
}
else 
{
	echo "Invalid User";
	
}

$query2="select Batch_id from users where Username='$user'";
$res=$conn->query($query2);
$r=$res->fetch_assoc();
$batch=$r["Batch_id"];

$_SESSION["Batch"]=$batch;
$conn->close();
?> 