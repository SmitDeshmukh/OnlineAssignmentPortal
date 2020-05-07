<?php 

session_start();
echo "</<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='Css/main.css' rel='stylesheet'>'
</head>
</html>";

$c=$_SESSION['Course'];
$e=$_POST['en'];
$_SESSION["enr"]=$e;
$table=$c."uploadedass";





$dbLink=new mysqli("127.0.0.1",'root','','project_2k19');
	if(mysqli_connect_errno())
	{
		die("mysqli Connection Failed: ".mysqli_connet_error());
	}
	$sql="SELECT * from ".$table." where enrollment_no=".$e;
	$result=$dbLink->query($sql);
	if($result)
	{
		if($result->num_rows==0)
		{
			echo "<p>There are no files files in database</p>";
		}
		else
		{
			echo "<table width='100%'>
			<tr>
			<td><b>Name</b></td>
			<td><b>Id</b></td>
			<td><b>Mime</b></td>
			<td><b>Size</b></td>
			<td><b>Created</b></td>
			<td><b>&nbsp;</b></td>
			</tr>";
			while ($row=$result->fetch_assoc()) {
				# code...
				echo "<tr>
				<td><b>{$row['file_name']}</b></td>
				<td><b>{$row['id']}</b></td>
				<td><b>{$row['mime']}</b></td>
				<td><b>{$row['size']}</b></td>
				<td><b>{$row['created']}</b></td>
				<td><b><a href='download.php?id={$row['id']}'>Download</a></b></td>
				
				</tr>";
			}
			echo "</table>";
		}
		$result->free();
		
	}
	else
	{
		echo "Error! SQL query Failed!";
		echo "<pre>{$dbLink->error}</pre>";

	}
	$dbLink->close();

 ?>
  <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="Css/i.css">
 </head>
 <body>

 	<form action="saveMarks.php" method="POST">
 		<br><br><br><br>
 		<table style="border-color: black">
 			<tr>
 				<td>Enter Enrollment no</td><td><input type="text" name="t3"></td>
 			</tr>
 			<tr>
 				<td>Enter Assignment No</td><td><input type="text" name="t1"></td>
 			</tr>
 			<tr>
 				<td>Enter Marks</td><td><input type="text" name="t2"></td>
 			</tr>
 			<tr>
 				<td><input type="submit" value="Save"></td>
 			</tr>
 		</table>
 	</form>
 
 </body>
 </html>