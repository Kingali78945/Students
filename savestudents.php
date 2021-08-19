<?php
error_reporting(0);
$db = mysqli_connect("localhost", "root", "", "students"
$image = $_FILES['studentimage']['tmp_name'];
$sql = "INSERT INTO student (StudentID, Password, DOB, FirstName, LastName, House, Town, County, Country, PostCode, Image) VALUES('$StudentID', '$Password', '$DOB' '$FirstName','$LastName','$House','$Town','$County','$Country','$PostCode','$imagedata')";
$result = mysqli_query($db, $sql);
echo $sql;
mysqli_close($db);

?>
