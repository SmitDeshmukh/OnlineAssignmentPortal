<?php
session_start();
include 'Connection1.php';

$en=$_SESSION['User'];
$c=$_SESSION['Course'];
$b=$_SESSION['Batch'];

$cd;
$ct;
if($c=='JS')
{
	$ct='js';
	$cd='js_date';
}
elseif ($c=='NMA') {

	$ct='nma';
	$cd='nma_date';
}
elseif ($c=='ACN') {
	$ct='acn';
	$cd='acn_date';
}
elseif ($c=='SE') {
	$ct='se';
	$cd='se_date';
}
elseif ($c=='JAVA') {
	$ct='java';
	$cd='java_date';
}




$curr_date=date("Y-m-d");
$ass_no=$_POST['field1'];
$_SESSION['ass_id']=$ass_no;
if ($b=='1') {
	$b_id='Date_a';
}
elseif ($b=='2') {
	$b_id="Date_b";
}
elseif ($b=='3') {
	$b_id="Date_c";
}
/*if ($b=='1') {

	$sql="select * from ".$cd." where Assi_no=".$ass_no;
		$result=$conn->query($sql);
	while ($r=$result->fetch_assoc()) 
	{
		if(($r['Date_a']==$curr_date) && ($r['Assigned']==1))
		{
			$query="Select Aim from ".$ct." where Assi_no=".$ass_no;
			$res=$conn->query($query);
			while($row=$res->fetch_assoc())
			{
				$aim=$row['Aim'];
		
			}

		}
		else
		{
			$aim="SORRY!!ASSIGNMENT EXPIRED OR NOT ASSIGNED YET";
		}
	}

}
elseif ($b==2) {
	

}
elseif ($b==3) {
	$b_id='Date_c';
}
else
{
	$aim="Sorry";
}*/

$sql="select * from ".$cd." where Assi_no=".$ass_no;
$result=$conn->query($sql);
while ($r=$result->fetch_assoc()) {
if(($r[$b_id]==$curr_date) && ($r['Assigned']==1))
{
	$query="Select Aim from ".$ct." where Assi_no=".$ass_no;
	$res=$conn->query($query);
	while($row=$res->fetch_assoc())
	{
		$aim=$row['Aim'];
		
	}

}
else
{
	if (!$b) {
		echo "</<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<script>
			alert('You are not in valid batch');
			</script>
		</head>
		</html>";
	}
	$aim="SORRY!!ASSIGNMENT EXPIRED OR NOT ASSIGNED YET";
}
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="Css/s2.css">
<div class="form-style-6">
	<h1>Aim:</h1><input type="text" size="200" name="a" value="<?php echo @$aim ?>" disabled>
</div>
</body>
</html>