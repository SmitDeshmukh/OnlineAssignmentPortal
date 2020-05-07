<?php
	session_start();

	$c=$_SESSION['Course'];
	if($c=='JS')
	{
		echo "<html><body><img src='images/MGY.png' ></body></html>";
	}
	elseif ($c=='NMA') 
	{
		echo "<html><body><img src='images/SPA.png'></body></html>";
		
	}
	elseif ($c=='ACN') 
	{
		
		echo "<html><body><img src='images/TPS.png'></body></html>";
	}
	elseif ($c=='SE') 
	{
		echo "<html><body><img src='images/RJC.png'></body></html>";
	}
	elseif ($c=='JAVA') 
	{
		
		echo "<html><body><img src='images/GBG.png'></body></html>";
	}

?>