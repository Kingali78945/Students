<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

$sql = "SELECT studentid,dob,firstname,lastname,house,town,county,country,postcode FROM student;";

   $result = mysqli_query($conn,$sql);

   $data['content'] .= '<form method="post">';
   $data['content'] .= "<table border='1'>";
   $data['content'] .= "<h2>Students</h2><table class='table table-hover'>";
   $data['content'] .= "<tr><th>Student ID</th><th>DOB</th><th>First Name</th><th>Last Name</th><th>House</th><th>Town</th>
   <th>County</th><th>Country</th><th>Postcode</th><th>Select</th></tr>";