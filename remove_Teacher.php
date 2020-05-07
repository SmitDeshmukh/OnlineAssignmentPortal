
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
$teacher= $_POST['t1'];
$course=$_POST['t2'];

 $query = " DELETE from users where username='$teacher'";
 $query2= " DELETE from teachers where username='$teacher'";
        $result = $conn->query($query);
        $result2 = $conn->query($query2);
       if (($result) && ($result2)) {
       	echo "Teacher Removed`";
       }
       else
       {
       	echo "Teacher not exists";
       }
$conn->close();
?> 