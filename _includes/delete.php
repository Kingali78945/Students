<?php
include_once("config.inc");
include_once("dbconnect.inc");
include_once("functions.inc");
if(isset($_POST['delete']))

   {
     $checkboxcount = count($_POST['delrecords']);
     $i=0;
     while($i<$checkboxcount)
     {                             
       $theid = $_POST['delrecords'][$i];
       mysqli_query($conn, "DELETE FROM student WHERE studentid= '$theid'");
       $i++;

     }

      echo "<H3>Success: Data successfully removed!</H3>";
   }
	
	header("Location: ../student.php");