<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

  

   // check logged in
   if (isset($_SESSION['id'])) 
   {
      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects all students
      $sql = "SELECT * FROM student;";

      $result = mysqli_query($conn,$sql);

      $data['content'] .= "<form action='deleteStudents.php' method='POST'>";

      // prepare page content
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='20' align='center'>Students</th></tr>";
      $data['content'] .= "<th>ID</th><th>Password</th><th>DoB</th><th>First Name</th><th>Last Name</th><th>House</th><th>Town</th><th>County</th><th>Country</th><th>Postcode</th><th>Select</th></tr>";

       // Display the student details within the html table
       while($row = mysqli_fetch_array($result)) 
       {
         $data['content'] .= "<tr><td> {$row["studentid"]} </td>
                                 <td> {$row["password"]} </td>
                                 <td> {$row["dob"]} </td>
                                 <td> {$row["firstname"]} </td>
                                 <td> {$row["lastname"]} </td>
                                 <td> {$row["house"]} </td>
                                 <td> {$row["town"]} </td>
                                 <td> {$row["county"]} </td>
                                 <td> {$row["country"]} </td>
                                 <td> {$row["postcode"]} </td>
                                 <td> <input type='checkbox' name='students[]' value='$row[studentid]'/></td></tr>";
       }
       $data['content'] .= "</table>";
      
       //delete student record
       $data['content'] .= "<input type='submit' name='deletebtn' id='delete' value='delete'>";

       $data['content'] .= "</form>";
   
 
       // render the template
       echo template("templates/default.php", $data);
 
    } else {
       header("Location: index.php");
    }
 
    echo template("templates/partials/footer.php");

?>

