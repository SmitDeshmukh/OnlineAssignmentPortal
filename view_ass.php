
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="view_ass.php" method="post" >
			<table><tr><td>Course Code:</td><td><select name="course_code">
  <option value="CM485">CM485</option>
  <option value="CM585">CM585</option>
  <option value="CM282">CM282</option>
  <option value="CM181">CM181</option>
</select></td></tr><br><br>
		<td></td><td><input type="submit" name="submit" value="Submit"></td>
		</table>
		
	</form>

</body>
</html>

<?php
// Start the session
session_start();
?>

<?php
// Set session variables
$en_no=$_SESSION["en_no1"];
$_SESSION["course_code"]=$_SESSION["course1"];

?>
<?php 
$dbLink=new mysqli("127.0.0.1",'root','','project_2k19');
	if(mysqli_connect_errno())
	{
		die("mysqli Connection Failed: ".mysqli_connet_error());
	}
	
	if (isset($_POST['submit'])) {
		# code...
		if(!empty($_POST['course_code']))
		{


	$course_code=$_POST['course_code'];
	}
	else
	{
		$course_code=$_SESSION['course_code'];
	}
	$course=$_SESSION['course1'];
	
	if ($course_code==$course) {
		# code...
	
	$query_course=mysqli_query($dbLink,"SELECT * FROM course WHERE course_code='".$course_code."'");
        $numrows1=mysqli_num_rows($query_course);
        if($numrows1!=0)
        {
        $row=mysqli_fetch_assoc($query_course);
        $table=$row['course_name']."asslist";
       
	$sql="SELECT ass_id,course_code,ass_aim,pr_hrs from ".$table."";
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
			<td><b>Assignment no</b></td>
			<td><b>Course code</b></td>
			<td><b>Assignment Aim</b></td>
			<td><b>No of Hours</b></td>
			<td><b>&nbsp;</b></td>
			</tr>";
			while ($row=$result->fetch_assoc()) {
				# code...
				$ass=$row['ass_id'];
			$course=$row['course_code'];
				echo "<tr>
				<td><b>{$row['ass_id']}</b></td>
				<td><b>{$row['course_code']}</b></td>
				<td><b>{$row['ass_aim']}</b></td>
				<td><b>{$row['pr_hrs']}</b></td>
				<td><b><form action='view_ass.php?en_no=$en_no&course_code=$course&ass_id=$ass' method='post' enctype='multipart/form-data'><td><input type='file' name='uploaded_file'></td><td><input type='submit' name='submit' value='Upload'></td><td><input type='submit' name='delete' value='Delete Uploaded File'></form></b></td>
				
				</tr>";
			}
			echo "</table>";
		}

		$result->free();
		}
	}

else
{
	echo "Invalid Course Code!";
}
		
	}
	else
	{
		echo "Error! SQL query Failed!";
		echo "<pre>{$dbLink->error}</pre>";

	}
	$dbLink->close();
}
 ?>
<?php include 'upload_ass.php';
?>