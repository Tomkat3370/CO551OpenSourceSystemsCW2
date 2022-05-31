<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   // check logged in
   if (isset($_SESSION['id'])) 
   {

    
    //Loop over ($_POST) for each
    
        var_dump($_POST['students']);

              
            $sql = "DELETE FROM 'student' WHERE 'students' = 'studentid';";

            $result = mysqli_query($conn,$sql);

            

            //redirect
             header("Location: students.php");
    
            echo "Delete Successful!";
        
    
    
    

           
            
          

     
             
        
         
        

    
    
    
    
   }
     else {
      header("Location: index.php");
     }
?>

