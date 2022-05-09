<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   require_once 'vendor/autoload.php';

   // check logged in
   if (isset($_SESSION['id'])) 
   {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects all students
      $sql = "SELECT * FROM student;";

      $result = mysqli_query($conn,$sql);

      // prepare page content
      $data['content'] .= "<table border='1'>";
      $data['content'] .= "<tr><th colspan='5' align='center'>Modules</th></tr>";
      $data['content'] .= "<tr><th>Code</th><th>Type</th><th>Level</th></tr>";
      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) 
      {
         $data['content'] = "<tr><td> $row[txtstudentid] </td>
                                 <td> $row[txtpassword] </td>
                                 <td> $row[txtdob] </td>
                                 <td> $row[txtfirstname] </td>
                                 <td> $row[txtlastname] </td>
                                 <td> $row[txthouse] </td>
                                 <td> $row[txttown] </td>
                                 <td> $row[txtcounty] </td>
                                 <td> $row[txtcountry] </td>
                                 <td> $row[txtpostcode] </td></tr>";
      }

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
