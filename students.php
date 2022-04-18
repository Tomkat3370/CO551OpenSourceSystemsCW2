<html>
    <body>
    <?php
        include ("dbconnect.inc");

        echo "Student Records";

        $sql="SELECT*FROM student";
        $result = $mysqli->query($sql);


        echo "<table align='center' border='1'>";
        echo "<tr><th width='200' align='left'>ID</th>
              <th width='200' align='left'>First_Name</th>
              <th width='200' align='left'>Surname</th>
              <th width='200' align='left'>Course</th></tr>";
    ?>
    </body>
</html>