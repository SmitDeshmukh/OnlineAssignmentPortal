<?php
session_start();

$c=$_SESSION['Course'];
$e=$_SESSION['enr'];

$table=$c."uploadedass";

// Make sure an ID was passed
if(isset($_GET['id'])) {
// Get the ID
    $id = intval($_GET['id']);
 
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        // Connect to the database
       include 'Connection.php';
 
        // Fetch the file information
      //  $query = "SELECT * FROM ".$table." WHERE enrollment_no =".$e;
        $sql="select * from ".$table." where enrollment_no=".$e." AND id=".$id;
       $query = "
            SELECT `mime`, `file_name`, `size`, `data`
            FROM ".$table."
            WHERE `id` = {$id}";
        $result = $dbLink->query($sql);

       // $query = "select * from {$table} WHERE id ={$id} AND enrollment_no={$e}";
       //$result = $dbLink->query($query);
 
        if($result) {
            // Make sure the result is valid
            if($result->num_rows == 1) {
            // Get the row
                $row = mysqli_fetch_array($result);
 
                // Print headers
				$cur_mime=$row['mime'];
				$cur_size=$row['size'];
				$cur_name=$row['file_name'];
				// header("Pragma: public"); 
               // header("Expires: 0");
               // header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
               // header("Cache-Control: private",false);  
                header("Content-Type: ".$cur_mime);
               // header("Content-Type:application/octet-stream");
				//header("Content-Transfer-Encoding: binary");
                header("Content-Length:$cur_size");
                header("Content-Disposition:attachment;filename=$cur_name");
 
                // Print data
				
                echo $row['data'];
               
            }
            else {
                echo 'Error! No image exists with that ID.';
            }
 
            // Free the mysqli resources
            @mysqli_free_result($result);
        }
        else {
            echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
        }
        @mysqli_close($dbLink);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>

