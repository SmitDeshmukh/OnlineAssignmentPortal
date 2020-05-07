<?php
	session_start();
	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function change() {
			window.open('index1.php ');
			// body...
		}
		function endSession() {
		

			parent.location.href='login1.html';
		}
		function dynamicAss(choice) {
			
				if(choice==1)
				{
					parent.f3.location.href='myCourse.php';
				}
				else if (choice==2) 
				{
					parent.f3.location.href='myTimetable.php';	
				}
				else if (choice==3) 
				{
					parent.f3.location.href='myCreate.php';
				}
				else if (choice==4) 
				{
					parent.f3.location.href='myGrade.php';
				}
				else if (choice==5) 
				{
					parent.f3.location.href='viewAss.php';
				}
				else if (choice==6) 
				{
					parent.f3.location.href='viewSubAss.php';
				}
				else if (choice==7) 
				{
					parent.f3.location.href='studentReport.php';
				}
				else if (choice==8) 
				{
					parent.f3.location.href='submitReport.php';
				}
			
		}
	</script>
</head>
<link rel="stylesheet" type="text/css" href="Css/button.css">

<body>

	
	<button onclick="dynamicAss(1)">My Courses</button>
	<br>
	<button onclick="dynamicAss(2)"> My Timetable</button>
	<br>
	<div class="dropdown">
		<input type="submit" value="Assignments">	
		<div class="dropdown-content">
		<button onclick="dynamicAss(3)">Create</button>
		<button onclick="dynamicAss(4)">Grade Grid</button>
		<button onclick="dynamicAss(5)">View Assignments</button>
	</div>
</div>
	<br>
	
	<button onclick="dynamicAss(6)">View Submitted Assignments</button>
	<br>
	
	<button onclick="dynamicAss(7)">Student Reports</button>
	<br>
	
	<button onclick="dynamicAss(8)">Submit Report</button>
	<br>
	<input type="submit" value="Logout" name="b7" onclick="endSession()">
	<br>
		<button onclick="dynamicAss(9)">Change Password</button>


</body>
</html>

