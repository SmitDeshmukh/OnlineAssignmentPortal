<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="Css/admin.css">
</head>
<?php
include 'startadmin.html';
?>
<body background="yellow">
	<div class="head"> <h1><marquee>ADMIN PANEL</marquee></h1></div>
	<div class="a"><div class="a1"></div>
<form>
	<br><br><br>
	<center>
	<input type="button" name="" value="Add Teacher" onclick="parent.location='addTeacher.html'" class="button button2" ><br><br><br>
	<input type="button" name="" value="Remove Teacher" onclick="parent.location='removeTeacher.html'" class="button button2"><br><br><br>
	<input type="button" name="" value="Course Registeration" onclick="parent.location='RegisterStudent.php'" class="button button2">
</center>
</form>
</div>
</body>
</html>