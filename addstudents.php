<html>
<h2> Detail Of Student</h2>

<form enctype ="multipart/form-data" action ="savestudents.php" method ="post">

Student ID:
<input type ="number" name ="numid" class ="form-control" />
</br></br>

DOB:
<input type ="date" name ="dob" class ="form-control"/>
</br></br>

First Name:
<input type ="text" name ="txtfirstname" class ="form-control"/>
</br></br>

Last Name:
<input type ="text" name ="txtlastname" class ="form-control"/>
</br></br>

House:
<input type ="text" name ="txthouse" class ="form-control"/>
</br></br>

Town:
<input type ="text" name ="txttown" class ="form-control"/>
</br></br>

County:
<input type ="text" name ="txtcounty" class ="form-control"/>
</br></br>

Country:
<input type ="text" name ="txtcountry" class ="form-control"/>
</br></br>

PostCode:
<input type ="text" name ="txtpostcode" class ="form-control"/>
</br></br>

Password:
<input name="password" type="password" required/>
</br></br>

Student Image:
<input type ="file" name ="studentimage" accept = "image/jpeg" class ="form-control"/>
</br></br>

<input type ="submit" class = "btn btn-default" value ="Save"/>

</form>
</html>

<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   // check logged in
   if (isset($_SESSION['id'])) {
     echo template("templates/partials/header.php");
     echo template("templates/partials/nav.php");
     
$data['content'] .= '</form>';