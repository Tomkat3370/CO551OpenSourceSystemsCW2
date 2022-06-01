<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   // check logged in
   if (isset($_SESSION['id'])) 
   {
   
      if(isset($_POST["studentid"]) && !empty($_POST["studentid"]))
      {
          
        $result = confirm("Want to delete?");
        if ($result = "Yes") 
        {
          $sql = "DELETE FROM student WHERE studentid='?'";
          mysqli_query($conn, $sql);

          echo "Record deleted successfully";

          //redirect
          header("Location: students.php");

        }
        else
        {
          header("Location: index.php");
        }
      }
    }        
      
      
      
?>
    
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["studentid"]); ?>"/>
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                
                                <a href="students.php" type="submit" value="Yes"  class="btn btn-danger" name='deletebtn'class="btn btn-secondary ml-2">Yes</a>
                                <a href="index.php" class="btn btn-secondary ml-2">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>


