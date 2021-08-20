<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   
   if (isset($_SESSION['id'])) {
	   
      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      $sql = "select * from studentmodules sm, module m where m.modulecode = sm.modulecode and sm.studentid = '" . $_SESSION['id'] ."';";

      $result = mysqli_query($conn,$sql);

      $data['content'] .= "<table border='2'>";
      $data['content'] .= "<h2>Modules</h2><table class='table table-hover'>";
      $data['content'] .= "<tr><th>Code</th><th>Type</th><th>Level</th></tr>";

      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr><td> $row[modulecode] </td><td> $row[name] </td>";
         $data['content'] .= "<td> $row[level] </td></tr>";
      }
      $data['content'] .= "</table>";

      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
