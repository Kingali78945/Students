<?php
include_once("config.inc");
include_once("dbconnect.inc");
include_once("functions.inc");
if (isset($_SESSION['id'])) {
   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");
}
	$student = $_POST['StudentID'];
	
	if (empty($student)) {
		echo 'no student selected';
	}
	else {
		foreach ($student as $studentid) {
			$sql = "DELETE from student WHERE studentid='$studentid';";
			mysqli_query($conn,$sql);
			
		}
	}
	
	header("Location: ../student.php");