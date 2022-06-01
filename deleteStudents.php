<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   

   // check logged in
   if (isset($_SESSION['id'])) 
   {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");
   
      if(isset($_POST["deletebtn"]))
      {
          foreach($_POST['students'] as $sid)
          {
            $sql = "DELETE FROM student WHERE studentid='$sid'";

            $result = mysqli_query($conn, $sql);
  
            $data['content'] .= "<p>Record deleted successfully</p>";

          }

          $data['content'] .= "<form action='students.php' method='post'>";
      $data['content'] .= "<input type='submit' name='backbtn' value='Back'/>";
      $data['content'] .= "</form>";

  // render the template
  echo template("templates/default.php", $data);

} 
else 
{
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

}
      
      
      
?>