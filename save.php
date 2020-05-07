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
$ass_no=$_POST['n1'];
$dt_a=$_POST['d1'];
$dt_b=$_POST['d2'];
$dt_c=$_POST['d3'];
$ct;
if($c=='JS')
{
	$ct='js_date';
}
elseif ($c=='NMA') 
{
	$ct='nma_date';
}
elseif ($c=='ACN') 
{
	$ct='acn_date';
}
elseif ($c=='SE') 
{
	$ct='se_date';
}
elseif ($c=='JAVA') 
{
	$ct='java_date';
}

/*

	$query="Select Assigned from acn_date where Assi_no='$ass_no'";
	$res=$conn->query($query);

	if($res==1) 
	{
		echo "Exist";
	}
	else {
		$sql="insert into acn_date values('$ass_no','$dt',1)";
		$result=$conn->query($sql);
		echo "inserted";
	}
*/
 $query1=mysqli_query($conn,"SELECT * FROM ".$ct." where Assi_no='$ass_no'");
        $numrows=mysqli_num_rows($query1);
       
        if($numrows==0)
        {
            $sql="insert into ".$ct." values('$ass_no','$dt_a','$dt_b','$dt_c',1)";
		$result=$conn->query($sql);
		

            if($result){
                echo "Assignment Successfully Registered!";
            }else
            {
                echo "Failure!";
            }
        }
        else
        {
        	echo "Already done";
        }

?>