<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   // check logged in
   if (isset($_SESSION['id'])) 
   {

    
    //Loop over ($_POST) for each
    foreach($_POST['students'] as $studentid) 
    {
        var_dump($_POST['sttudents']);

        if(var_dump($_POST['students']) == $studentid)
        {
        
            $sql = "DELETE FROM 'student' WHERE 'students' = 'studentid';";

            

            $result = mysqli_query($conn,$sql);

            //redirect
             header("Location: students.php");
    
            echo "Delete Successful!";
        }  

        die();
    }
    
    

           
            
          

     
             
        
         
        

    
    
    
    
   }
     else {
      header("Location: index.php");
     }
?>

