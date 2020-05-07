
<!DOCTYPE html>
 <html>
 <head>
 	<title>LOGIN</title>
 	<link rel="stylesheet" type="text/css" href="Css/log.css">
 	<!-- Favicon /-->
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" /> <!-- Favicon /-->

 	<script type="text/javascript">
 		
 	</script>
 </head>
 <body>
 	
 <form class="mainprojbox" action="checkLogin.php" method="POST">
 	<h1>login</h1>
 	<input type="text" name="uname" placeholder="Username">
<input type="password" name="pass" placeholder="Password">
<h2>Course:</h2>
	<select name="drop">
		
		<option>NMA</option>
		<option>JS</option>
		<option>Java</option>
		<option>ACN</option>
		<option>SE</option>
	</select>

<input type="submit" value="LOGIN" >
 </form>

 </body>
 </html>