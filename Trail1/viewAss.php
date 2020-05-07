<!-- Index.php File-->

<?php 
session_start();
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
$c=$_SESSION['Course'];
$sql="select * from $c ";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Fetch Data From Database </title>
        <link rel="stylesheet" type="text/css" href="Css/main.css">
    </head>
<body>
    
    <table align="center" border="1px" >
        <tr>
            <th colspan="6"><h2>Assignments</h2></th>
        </tr>
        <t>
            <th> Assi</th>
            <th> Aim </th>
            <th> Hrs </th>
        </t>
       
    <?php 
       
        while($rows=$result->fetch_assoc())
        {
    ?>        
            <tr>
                <td><?php echo $rows['Assi_No']; ?></td>
                <td><?php echo $rows['Aim']; ?></td>
                <td><?php echo $rows['Hrs']; ?></td>
            </tr>
    <?php  
        }
    ?>    
    </table>
    
</body>
</html>