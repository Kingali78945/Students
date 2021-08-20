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
      $data['content'] .= "<form action='_includes/delete.php' method='POST'><h2>Students</h2><table class='table table-hover' >";
      $data['content'] .= "<thead>";
      $data['content'] .= "<tr><th>FirstName</th><th>Lastname</th><th>dob</th><th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>select</th></tr></thead><tbody>";
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<td> $row[firstname] </td><td> $row[lastname] </td>";
         $data['content'] .= "<td> $row[dob] </td><td> $row[house]</td><td> $row[town]</td><td> $row[county] </td> <td> $row[country] </td><td> $row[postcode] </td><td><input type='checkbox' name='StudentID[]'  value='$row[studentid]'></td></tr>";
      }
      $data['content'] .= "</tbody></table>  <div><input type='submit' name='Delete' value='Delete'></div></form>";
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