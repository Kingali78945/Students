<?php
error_reporting(0);
$db = mysqli_connect("localhost", "root", "", "students");

$image = $_FILES['studentimage']['tmp_name'];


$sql = "INSERT INTO student";
$sql = "(StudentID, Password, DOB, FirstName, LastName, House, Town, County, Country, PostCode, Image)";
$sql = "VALUES ('$_POST[numid]', '$_POST[txtpassword]', $_POST[dob]', '$_POST[txtfirstname]', '$_POST[txtlastname]', '$_POST[txthouse]', '$_POST[txttown]', '$_POST[txtcounty]', '$_POST[txtcountry]', '$_POST[txtpostcode]', '$imagedata');";


$result = mysqli_query($db, $sql);

echo $sql;
mysqli_close($db);

?>
