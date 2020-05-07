<?php
session_start();

include 'Connection.php';


$u=$_SESSION['User'];
$i=$_POST['t1'];
$m=$_POST['t2'];
$e=$_POST['t3'];
$c=$_SESSION['Course'];
$ct;

if ($c=='JS') {
  $ct="jsmarks";
}
elseif ($c=='SE') {
  # code...
  $ct="semarks";
}
elseif ($c=='ACN') {
  $ct="acnmarks";
}
elseif ($c=='JAVA') {
  # code...
  $ct="javamarks";
}
elseif ($c=='NMA') {
  $ct="nmamarks";
}


        $query1=mysqli_query($dbLink,"SELECT * FROM ".$ct." where Enrollment_no='$e'");
        $numrows=mysqli_num_rows($query1);
       
        if($numrows==0)
        {
            $sql="insert into ".$ct." values('$e','$i','$m')";
             $result=$dbLink->query($sql);
    

            if($result){
                echo "Marks successfully entered!";
            }else
            {
                echo "Failure!";
            }
        }
        else
        {
          echo "Already given";
        }

?>