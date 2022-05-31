<?php

	include("_includes/config.inc");
	include("_includes/dbconnect.inc");
	include("_includes/functions.inc");
	
	
	if (isset($_SESSION['id']))
	{	
					
		$sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) VALUES (61983081, NVRq\.$a3K<=Kh~y, Izotz,Zeng, 12, Linden Avenue, Salford, UK, M6 7HT)";

		mysqli_query($conn, $sql);

		$sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) VALUES (64433421, a4*vV;6p:]\/qWWt, Gustave, Colt, 22, Hill Crescent, Dudleston Heath, UK, SY12 9NA";

		mysqli_query($conn, $sql);

		$sql = "INSERT INTO student (studentid, password, dob,  firstname, lastname, house, town, county, country, postcode) VALUES (98850215, dUbSYxv{tk@5vv-5, Wacława, Kuijpers, Rose Cottage, Heol Y Mynydd, Southerndown, UK, CF32 0SN";

		mysqli_query($conn, $sql);

		$sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) VALUES (97686560, !ZrtXuDE/4., Rayna, Harrell, 34, Wyresdale Avenue, St Helens, UK, WA10 6QQ";

		mysqli_query($conn, $sql);

		$sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) VALUES (83060305, x4dV3Q,=n(~;5>zq, Shammuramat, Nussbaum, 7, Barley Field Court, Halton, UK, LS15 7UE";

		mysqli_query($conn, $sql);
			
		
			echo "New students successfully added!";	
	}

?>