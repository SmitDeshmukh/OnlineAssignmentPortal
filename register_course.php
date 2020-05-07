<?php
// Check if a file has been uploaded
if(isset($_POST["submit"])) {
    
        $course=$_POST['course_name'];
        $course_code=$_POST['course_code'];
        $no_ass=$_POST['ass_no'];
        if(!empty($course) && !empty($course_code)){
         $con = new mysqli('127.0.0.1', 'root', '', 'project_2k19');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        
        $query=mysqli_query($con,"SELECT * FROM course WHERE course_code='".$course_code."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0)
        {
            $sql="INSERT INTO course(course_code,course_name,no_of_ass) VALUES ('$course_code','$course','$no_ass')";
            $result=mysqli_query($con,$sql);
            if($result){
                echo "Course Successfully Registered!";
            }else
            {
                echo "Failure!";
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