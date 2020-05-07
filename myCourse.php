<?php 
session_start();
$u=$_SESSION["User"];
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


$sql="select * from teachers where Username='$u'";
$result=$conn->query($sql);
//$password_data=$row["Course"];
?>
<link rel="stylesheet" type="text/css" href="Css/main.css">
<link rel="stylesheet" type="text/css" href="Css/admin.css">
<div class="a" style="position: absolute;top: 5%;left: 20%">
<table align="center" border="1px" style="width:370px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>My Courses</h2></th>
        </tr>
        <t>
            
            <th>Course Alloted</th>

        </t>
    <?php 
        while($rows=$result->fetch_assoc())
        {
    ?>        
            <tr>
               
                <td><?php echo $rows['Course']; ?></td>
      
            </tr></table></div>
    <?php     
        }
    ?>    


