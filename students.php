<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_SESSION['id'])) {
   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");
   $sql = "select * from student;";
   $result = $conn->query($sql);
 while($row = mysqli_fetch_assoc($result)) {
      $data['content'] .= '<form method="post"><h2>Students</h2><table class='table table-hover'>';
      $data['content'] .= "<thead>";
      $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>First Name</th><th>Last Name</th><th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Select</th></tr>";
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<td> $row[firstname] </td><td> $row[lastname] </td>";
         $data['content'] .= "<td> $row[dob] </td><td> $row[house]</td><td> $row[town]</td><td> $row[county] </td> <td> $row[country] </td><td> $row[postcode] </td><td><input type='checkbox' name='StudentID[]'  value='$row[studentid]'></td></tr>";
      }
      $data['content'] .= "</tbody></table>  <div><input type='submit' name='Delete' value='Delete'></div></form>";
       }
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
      echo "<H3>Success: Record successfully removed!</H3>";
   }
   
   
  echo template("templates/default.php", $data);
} 
else 
{
   header("Location:../index.php");
}
echo template("templates/partials/footer.php"); 
mysqli_close($conn);
?>