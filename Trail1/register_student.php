<!DOCTYPE html>
<html>
<head>
	<title>Regitser Student to Course/title>
</head>
<body>
<form action="register_course.php" method="post">
	<table>
		<tr><td>Course Name:</td><td><input type="text" name="course_name"></td></tr><br><br>
		<tr>
	<td>Course Code:</td><td><select name="course_code">
  <option value="CM485">CM485</option>
  <option value="CM585">CM585</option>
  <option value="CM282">CM282</option>
  <option value="CM181">CM181</option>
</select></td></tr><br><br>


	<tr><td>No of Assignments:</td><td><input type="number" name="ass_no"></td></tr><br><br>
	
	<tr></td><td><input type="submit" name="submit" value="REGISTER"></td></tr><br><br>

	
	</table>
</form>
</body>
</html>