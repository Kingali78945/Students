<?php
include_once("config.inc");
include_once("dbconnect.inc");
include_once("functions.inc");
// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");
}
	$students = $_POST['StudentID'];
	
	if (empty($students)) {
		echo 'no student selected';
	}
	else {
		foreach ($students as $studentid) {
			$sql = "DELETE from student WHERE studentid='$studentid';";
			//echo $sql;
			mysqli_query($conn,$sql);
			
		}
	}
	
	header("Location: ../students.php");