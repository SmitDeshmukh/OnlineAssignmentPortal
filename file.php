<?php
session_start();
if(isset($_POST['submit'])&&!empty($_FILES['uploaded_file']))
{

if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
       include 'Connection.php';
            //session_start();
            $file_name=$_SESSION['User'].$_SESSION['Course'].$_SESSION['ass_id'];
            //echo "$file_name";
            $en_no_db=$_SESSION['User'];
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
       // $course_code1=$_GET['course_code'];
 
        // Create the SQL query






 /*$query_course=mysqli_query($dbLink,"SELECT * FROM course WHERE course_code='".$course_code1."'");
        $numrows1=mysqli_num_rows($query_course);
        if($numrows1!=0)
       {
              $row=mysqli_fetch_assoc($query_course);
              $mycourse=$row['course_name'];
                
                $course_code=$row['course_code'];


            if($course_code==$_SESSION["course"]&&$course_code1==$_SESSION["course"])
            {*/
                 $table=$_SESSION['Course']."UploadedAss";
                // echo "$table";
                    $create_table="create table if not exists ".$table."(enrollment_no varchar(20) not null,id int not null ,file_name varchar(255) not null ,mime varchar(50) not null,size BigInt unsigned not null default 0,data mediumblob not null,created Datetime not null);";
    
                      $created=mysqli_query($dbLink,$create_table);
                   //   echo "Hello";
                  if($created)
                  {   
                    $ifExists="SELECT * from ".$table." WHERE file_name='".$name."'";
                    $num_rec=mysqli_query($dbLink,$ifExists);
                    $numOfExistingRecord=mysqli_num_rows($num_rec);
                    if($numOfExistingRecord==0)
                    {
                      $i=$_SESSION['ass_id'];

                     $query = "INSERT INTO ".$table." (enrollment_no,id,file_name,mime,size,data,created) VALUES ('{$en_no_db}','{$i}','{$name}','{$mime}','{$size}','{$data}',NOW())";
                   //  echo "Welcome";
 
                // Execute the query
                    $result=mysqli_query($dbLink,$query);
                  //  echo "Done!";
    
                 // Check if it was successfull
                         if($result) {
                                                    ?>
              <script type="text/javascript">
                alert("Your file was successfully added!")
              </script>
              <?php
                                 //echo 'Success! Your file was successfully added!';
                         }
                        else {
                                echo 'Error! Failed to insert the file'
                                . "<pre>{$dbLink->error}</pre>";
                            }
                             }
                  else{
                        ?>
              <script type="text/javascript">
                alert("You have already Submiteed this assignmnet!")
              </script>
              <?php

                      //  echo "You have already Submiteed this assignmnet!";   
                  }
                }
                      else {
                                echo 'An error occured while the file was being uploaded. '
                                . 'Error code: '. intval($_FILES['uploaded_file']['error']);
                    }

 
                // Close the mysql connection
               $dbLink->close();
            }

            else {
              echo 'Error! A file was not sent!';
            }
}}

// Echo a link back to the main pack(format)ge

            echo '<p>Click <a href="#">here</a> to go back</p>';
?>
                 
                    
                 