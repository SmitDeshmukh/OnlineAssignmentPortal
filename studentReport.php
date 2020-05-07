
<?php
session_start();
echo "<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='Css/main.css' rel='stylesheet'>'
</head>


</html>";

include 'Connection.php';



$c=$_SESSION['Course'];
$ct;
$u=$_POST['t5'];

if ($c=='JS') {
  $ct="jsmarks";
}
elseif ($c=='SE') {
  # code...
  $ct="semarks";
}
elseif ($c=='ACN') {
  $ct="acnmarks";
}
elseif ($c=='JAVA') {
  # code...
  $ct="javamarks";
}
elseif ($c=='NMA') {
  $ct="nmamarks";
}


$sql="Select * from ".$ct." where Enrollment_no=".$u;
$res=$dbLink->query($sql);

if($res)
	{
		if($res->num_rows==0)
		{
			echo "<p>There are no files files in database</p>";
		}
		else
		{
			echo "<table width='100%'>
			<tr>
			<td><b>Enrollment_no</b></td>
			<td><b>Assignment Id</b></td>
			<td><b>Marks</b></td>
			<td><b>&nbsp;</b></td>
			</tr>";
			while ($row=$res->fetch_assoc()) {
				# code...
				echo "<tr>
				<td><b>{$row['Enrollment_no']}</b></td>
				<td><b>{$row['Id']}</b></td>
				<td><b>{$row['Marks']}</b></td>
				
				</tr>";
				
			}
			echo "</table>";
		}
	}
$my_file = $u.'.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file


$data = $row['Enrollment_no'];
fwrite($handle, $data);

?>