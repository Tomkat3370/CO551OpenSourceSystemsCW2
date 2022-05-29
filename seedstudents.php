<?php

	include("_includes/config.inc");
	include("_includes/dbconnect.inc");
	include("_includes/functions.inc");
	require_once 'vendor/autoload.php';

	$faker = Faker\Factory::create();

	if (isset($_SESSION['id'])) 
	{

		for ($i=0; $i <= 5; $i++)
			{ 
				echo $faker->Studentid();
				echo $faker->Password();
				echo $faker->DoB();
				echo $faker->Firstname();
				echo $faker->Lastname();
				echo $faker->House();
				echo $faker-Town();
				echo $faker->County();
				echo $faker->Country();
				echo $faker->Postcode();
			}

	}
			
	

?>