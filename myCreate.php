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
$query="select Assi_no,Aim,Hrs from $c";
$result=$conn->query($query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Fetch Data From Database </title>   <link rel="stylesheet" type="text/css" href="Css/main.css">
         <link rel="stylesheet" type="text/css" href="Css/button.css">
    </head>
<body>
    <form action="save.php" method="POST">
    <table align="center" border="1px" >
        <tr>
            <th colspan="6"><h2>Create Assignments</h2></th>
        </tr>
        <t>
            <th> Assign_no</th>
            <th> Aim </th>
            <th> Hrs </th>
        </t>
        
    <?php 
        
        while($rows=$result->fetch_assoc())
        {
    ?>        
            <tr>
                <td><?php echo $rows['Assi_no']; ?></td>
                <td><?php echo $rows['Aim']; ?></td>
                <td><?php echo $rows['Hrs']; ?></td>
            
    <?php
        
        }

    ?>  
        
              
    </table>
    <table align="center">
    <tr>
    <td>Enter Assignment Number:</td><td><input type="number" name="n1" required></td>
</tr>
<tr>
    <td>Enter Date for batch 1</td><td><input type="date" name="d1" required></td>
</tr>
<tr>
    <td>Enter Date for batch 2</td><td><input type="date" name="d2" required></td>
</tr>
<tr>
    <td>Enter Date for batch 3</td><td><input type="date" name="d3" required></td>
</tr>
<tr>
   <td><input type="submit" name="" value="save"></td>    
</tr>
    </table>
    
</form>    
</body>
</html>