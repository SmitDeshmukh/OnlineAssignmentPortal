
<html>
<head>
    <title>Regitser Student to Course</title>
    <link rel="stylesheet" type="text/css" href="Css/admin.css">
</head>
<body>
<form action="RegisterStudent.php" method="post">
    <table>
        <tr><td>Course Name:</td><td><input type="text" name="course_name"></td></tr><br><br>
        <tr>
    <td>Course Code:</td><td><select name="course_code">
  <option value="CM485">CM485</option>
  <option value="CM585">CM585</option>
  <option value="CM282">CM282</option>
  <option value="CM181">CM181</option>
</select></td></tr><br><br>


    <tr><td>Enrollment No:</td><td><input type="number" name="en_no"></td></tr><br><br>
    
    <tr></td><td><input type="submit" name="submit" value="REGISTER"></td></tr><br><br>
    

    
    </table>
</form>
<tr></td><td><a href="view_ass.php"><button name="view" >View Assignments</button></a></td></tr><br><br>
     </body>


</html>






<?php


session_start();
$dum_en_no=$_SESSION['en_no'];
$dum_course=$_SESSION["course"];
// Set session variables
$_SESSION["en_no1"] =$dum_en_no;
$_SESSION["course1"]=$dum_course;
?>



<?php 
if(isset($_POST["submit"])) {
    
        $course=$_POST['course_name'];
        $course_code=$_POST['course_code'];
        $en_no=$_POST['en_no'];
       
        if(!empty($course) && !empty($course_code) && !empty($en_no)){
         $con = new mysqli('127.0.0.1', 'root', '', 'project_2k19');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
        $query_course=mysqli_query($con,"SELECT * FROM course WHERE course_code='".$course_code."'");
        $numrows1=mysqli_num_rows($query_course);
        if($numrows1!=0)
        {
            echo "Hello to course name";
        $row=mysqli_fetch_assoc($query_course);
        $mycourse=$row['course_name'];
        echo $mycourse;
        $course_name=$row['course_code'];

        if($course_name==$_SESSION["course"])
        {
            $table=$row['course_name']."StudentList";
             $create_table="create table if not exists".$table."(enrollment_no varchar(20) not null,no_ass_submitted int(5),course_code varchar(7) references course(course_code),primary key pk (enrollment_no));";
    
             $created=mysqli_query($con,$create_table);
            
            if($created)
            {   

            $query1=mysqli_query($con,"SELECT * FROM '".$table."' where ass_id='".$en_no."'");
            $numrows=mysqli_num_rows($query1);
            echo "$numrows";
            if($numrows==0)
            {
                $sql="INSERT INTO ".$table."(enrollment_no,no_ass_submitted,course_code) VALUES ('$en_no','0','$course_code')";
                $result=mysqli_query($con,$sql);
                if($result){
                    echo "Student Successfully Registered!";
                }else
                {   
                    echo "Failure!";
                }
            }
            }
            else
            {   
                echo "Error to create Table!";
            }
        }
    }

        else{
            echo "Course already exists!";
        }
    }
    else{
        echo "All fiels are Required!";
    }
    }
    
     ?>
