<html>
<h2> Detail Of Student</h2>
<form enctype ="multipart/form-data" action ="signup.php" method ="post">
Student ID:
<input type ="number" name ="numid" class ="form-control" />
DOB:
<input type ="date" name ="dob" class ="form-control"/>
First Name:
<input type ="text" name ="txtfirstname" class ="form-control"/>
Last Name:
<input type ="text" name ="txtlastname" class ="form-control"/>
House:
<input type ="text" name ="txthouse" class ="form-control"/>
Town:
<input type ="text" name ="txttown" class ="form-control"/>
County:
<input type ="text" name ="txtcounty" class ="form-control"/>
Country:
<input type ="text" name ="txtcountry" class ="form-control"/>
PostCode:
<input type ="text" name ="txtpostcode" class ="form-control"/>
Password:
<input name="password" type="password" required/>
Student Image:
<input type ="file" name ="studentimage" accept = "image/jpeg" class ="form-control"/>
<input type ="submit" class = "btn btn-default" value ="Save"/>
</form>
</html>

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
  ?>
<html>
<head>
<body>
    <style>

    </style>

</body>
</html>
