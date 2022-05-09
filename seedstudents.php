<?php

	include("_includes/config.inc");
	include("_includes/dbconnect.inc");
	include("_includes/functions.inc");

	require_once 'vendor/autoload.php';

		if (isset($_SESSION['id'])) 
		{
			$faker = Faker\Factory::create();

			//for loop to run insert query 5 times
			for ($id=0; $id <= 5; $id++) 
			{ 
				//INSERT query
				$sql = "INSERT INTO student";
				$sql .= "(studentid, password, dob, firstname, lastname, house, town, county, country, postcode)";
				$sql .= "VALUES('{$faker->txtstudentid()}', '{$faker->txtpassword()}', '{$faker->txtdob()}', '{$faker->txtfirstname()}', '{$faker->txtlastname()}', '{$faker->txthouse()}', '{$faker->txttown()}','{$faker->txtcounty()}', '{$faker->txtcountry()}', '{$faker->txtpostcode()}');";

				//Execute query
				$result = $mysqli->query($conn, $sql);
			}
		}
		
?>