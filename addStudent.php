<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

// check logged in
if (isset($_SESSION['id'])) 
{

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");


   // if the form has been submitted
   if (isset($_POST['submit'])) 
   {
      
      // build an sql statment to update the student details
      $sql = "INSERT INTO student ('studentid', 'password', 'dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode') VALUES ('$_POST[txtstudentid]', '$_POST[txtpassword]', '$_POST[txtdob]', '$_POST[txtfirstname]', '$_POST[txtlastname]', '$_POST[txthouse]', '$_POST[txttown]', '$_POST[txtcounty]', '$_POST[txtcountry]', '$_POST[txtpostcode]');";

      $result = mysqli_query($conn,$sql);

      $sql();

      $data['content'] .= "<p>Record added successfully</p>";
   }
   else 
   {
?>      
      // using <<<EOD notation to allow building of a multi-line string
      // see http://stackoverflow.com/questions/6924193/what-is-the-use-of-eod-in-php for info
      // also http://stackoverflow.com/questions/8280360/formatting-an-array-value-inside-a-heredoc
      $data['content'] = <<<EOD

   <h2>Add Student Record</h2>
   <form enctype="multipart/form-data" name="frmdetails" action="addStudent.php" method="post">
   Student ID :
   <input name="txtstudentid" type="text" value="" /><br/>
   First Name :
   <input name="txtfirstname" type="text" value="" /><br/>
   Surname :
   <input name="txtlastname" type="text"  value="" /><br/>
   Password:
   <input name="txtpassword" type="text" value="" /><br/>
   Date of Birth :
   <input name="txtdob" type="text" value="" /><br/>
   Number and Street :
   <input name="txthouse" type="text"  value="" /><br/>
   Town :
   <input name="txttown" type="text"  value="" /><br/>
   County :
   <input name="txtcounty" type="text"  value="" /><br/>
   Country :
   <input name="txtcountry" type="text"  value="" /><br/>
   Postcode :
   <input name="txtpostcode" type="text"  value="" /><br/>
  
   <input type="submit" value="Save" name="submit"/>
   </form>


EOD;
<?php
   }


   $data['content'] .= "<form action='students.php' method='post'>";
      $data['content'] .= "<input type='submit' name='backbtn' value='Back'/>";
      $data['content'] .= "</form>";

   // render the template
   echo template("templates/default.php", $data);


}


   header("Location: index.php");

   echo template("templates/partials/footer.php");

?>