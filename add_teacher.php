
<?php

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
$teacher= (string)$_POST['t1'];
$course=$_POST['t2'];

 $query = " INSERT INTO users VALUES (2,'$teacher','$teacher',0)";
 $query2= "INSERT INTO teachers VALUES(2,'$teacher','$teacher','$course')";
        $result = $conn->query($query);
        $result2 = $conn->query($query2);
       if (($result) && ($result2)) {
       	echo "Teacher added";
       }
       else
       {
       	echo "Re-add Teacher";
       }
$conn->close();
?> 