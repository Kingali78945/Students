<?php

$sql1="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES
('20000000', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3LS', '1974-11-10', 'Jon', 'Smith', '23 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";
$sql2="INSERT INTO`student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES
('20000001', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3Lg', '1974-11-11', 'ali', 'ejaz', '25 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";
$sql3="INSERT INTO`student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES
('20000002', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3Lf', '1974-11-12', 'cristiano', 'ronaldo', '27 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";
$sql4="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES
('20000003', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3Lz', '1974-11-13', 'raheem', 'Sterling', '29 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";
$sql5="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES
('20000004', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3Lz', '1974-11-14', 'Lionel', 'Messi', '31 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT');";

if ($conn->query($sql1) === TRUE){
	
	echo "New record created<br/>";
	} else{
	echo "Error: " .$sql1."<br/>" . $conn->error;
	}
if ($conn->query($sql2) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql2."<br/>" . $conn->error;
}
if ($conn->query($sql3) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql3."<br/>" . $conn->error;
}
if ($conn->query($sql3) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql3."<br/>" . $conn->error;
}
if ($conn->query($sql4) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql4."<br/>" . $conn->error;
}
if ($conn->query($sql5) === TRUE){
	echo "New record created<br/>";
}
else{
	echo "Error: " .$sql5."<br/>" . $conn->error;
}
?>