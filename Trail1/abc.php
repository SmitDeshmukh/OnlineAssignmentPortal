<?php
session_start();

$c=$_SESSION['Course'];
$t;
	if($c=='JS')
	{
		$t="Mrs. Megha Yawalkar ma'am";
		echo "<html><body><link rel='stylesheet' type='text/css' href='Css/main.css'><center><h1>Welcome ".$t."</h1><center></body></html>";

	}
	elseif ($c=='NMA') 
	{
	$t="Mrs. Sayali Ambavane ma'am";
	echo "<html><body><link rel='stylesheet' type='text/css' href='Css/main.css'><center><h1>Welcome ".$t."</h1><center></body></html>";

		
	}
	elseif ($c=='ACN') 
	{
		
		$t="Mr. T. Sharma sir";
		echo "<html><body><link rel='stylesheet' type='text/css' href='Css/main.css'><center><h1>Welcome ".$t."</h1><center></body></html>";

	}
	elseif ($c=='SE') 
	{
		$t="Mrs. Reshma  Chavan ma'am";
		echo "<html><body><link rel='stylesheet' type='text/css' href='Css/main.css'><center><h1>Welcome ".$t."</h1><center></body></html>";

	}
	elseif ($c=='JAVA') 
	{
		
		$t="Mrs. Gauri Garud ma'am";
		echo "<html><body><link rel='stylesheet' type='text/css' href='Css/main.css'><center><h1>Welcome ".$t."</h1><center></body></html>";

	}


?>