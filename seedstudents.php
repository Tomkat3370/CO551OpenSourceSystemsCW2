<?php

	require_once 'vendor/autoload.php';

	include("_includes/config.inc");
	include("_includes/dbconnect.inc");
	include("_includes/functions.inc");
	

	$faker = Faker\Factory::create();

	if (isset($_SESSION['id'])) 
	{	
		for ($i=0; $i <= 5; $i++)
			{ 
				$sql = "INSERT INTO student(studentid, firstname, lastname, house, town, county, country, postcode)";

				mysqli_query($conn, $sql);
			}
		
			echo "New students successfully added!";	

	}
			
	

?>