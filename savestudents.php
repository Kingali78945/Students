<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   
   if (isset($_SESSION['id'])) {
     echo template("templates/partials/header.php");
     echo template("templates/partials/nav.php");
     
$data['content'] .= '</form>';

if(isset($_POST['btncreate'])){
  
  $ID = mysqli_real_escape_string($conn, $_POST['txtID']);
  $fname = mysqli_real_escape_string($conn, $_POST['txtfname']);
  $lname = mysqli_real_escape_string($conn, $_POST['txtlname']);
  $dateofbirth = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $firstline = mysqli_real_escape_string($conn, $_POST['txtfirstline']);
  $house = mysqli_real_escape_string($conn, $_POST['txthouse']);
  $town = mysqli_real_escape_string($conn, $_POST['txttown']);
  $county = mysqli_real_escape_string($conn, $_POST['txtcounty']);
  $country = mysqli_real_escape_string($conn, $_POST['txtcountry']);
  $postcode = mysqli_real_escape_string($conn, $_POST['txtpostcode']);
  
  $hashedpass = password_hash($password, PASSWORD_DEFAULT);
  $idcheck = mysqli_query($conn, "SELECT studentid FROM student WHERE studentid = $ID");
  $count = mysqli_num_rows($idcheck);
  if($count>0)
  {
     echo "<H3>Error: Unfortunately, there is already a student with this ID.</H3>";
  }
  else
  {
    $result = mysqli_query($conn, " INSERT INTO student(studentid,password,dob,firstname,lastname,
      house,town,county,country,postcode) VALUES
('$ID','$hashedpass', '$dateofbirth', '$fname', '$lname', '$firstline', '$town', '$county', '$country', '$postcode');");

      echo "<H3>Success: A new user has been created!</H3>";

  }
  }
   echo template("templates/default.php", $data); 
  }
  else 
  {   
   header("Location: ../index.php");
  }
  echo template("templates/partials/footer.php");
<head></head>
<body></body>
 <style></style>
error_reporting(0);
$db = mysqli_connect("localhost", "root", "", "students"
$image = $_FILES['studentimage']['tmp_name'];
$sql = "INSERT INTO student (StudentID, Password, DOB, FirstName, LastName, House, Town, County, Country, PostCode, Image) VALUES ('$_POST[numid]', '$_POST[txtpassword]', $_POST[dob]', '$_POST[txtfirstname]', '$_POST[txtlastname]', '$_POST[txthouse]', '$_POST[txttown]', '$_POST[txtcounty]', '$_POST[txtcountry]', '$_POST[txtpostcode]', '$imagedata');");
mysqli_query($conn,$sql);
mysqli_close($db);
?>
