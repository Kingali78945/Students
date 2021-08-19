<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   if (isset($_POST['submit'])) {

      $sql = "update student set firstname ='" . $_POST['txtfirstname'] . "',";
      $sql .= "lastname ='" . $_POST['txtlastname']  . "',";
      $sql .= "house ='" . $_POST['txthouse']  . "',";
      $sql .= "town ='" . $_POST['txttown']  . "',";
      $sql .= "county ='" . $_POST['txtcounty']  . "',";
      $sql .= "country ='" . $_POST['txtcountry']  . "',";
      $sql .= "postcode ='" . $_POST['txtpostcode']  . "' ";
      $sql .= "where studentid = '" . $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);

      $data['content'] = "<p>Your details have been updated</p>";

   }
   else {

      $sql = "select * from student where studentid='". $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);

      $data['content'] = <<<EOD

   <h2>My Details</h2>
   <form name="frmdetails" action="" method="post">
   First Name :
   <input name="txtfirstname" type="text" value="{$row['firstname']}" /><br/>
   Surname :
   <input name="txtlastname" type="text"  value="{$row['lastname']}" /><br/>
   Number and Street :
   <input name="txthouse" type="text"  value="{$row['house']}" /><br/>
   Town :
   <input name="txttown" type="text"  value="{$row['town']}" /><br/>
   County :
   <input name="txtcounty" type="text"  value="{$row['county']}" /><br/>
   Country :
   <input name="txtcountry" type="text"  value="{$row['country']}" /><br/>
   Postcode :
   <input name="txtpostcode" type="text"  value="{$row['postcode']}" /><br/>
   <input type="submit" value="Save" name="submit"/>
   </form>

EOD;

   }

   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

?>
