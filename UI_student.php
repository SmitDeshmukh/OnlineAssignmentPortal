
<!DOCTYPE html>
<html>
<head>
	<title>UI_STUDENT</title>
	<script type="text/javascript">
		
			history.pushState(null,null,location.href)
			window.onpopstate=function()
			{
				history.go(1);
			};
		
	</script>
</head>
<frameset rows="20,75">
	<frame name="f1" src="frame1.html" noresize="f1" > </frame>
<frameset cols="20,80">
	<frame name="f2" src="list_student.php" noresize="f2"> </frame>
	<frame name="f3" src="s2.php" noresize="f3"></frame>
	
</frameset>
</frameset>
<body>
<form>
	<?php
session_start();
echo "Username is " . $_SESSION["User"] . ".<br>";
echo "Password is " . $_SESSION["Pwd"] . ".";

?>
</form>
</body>
</html>