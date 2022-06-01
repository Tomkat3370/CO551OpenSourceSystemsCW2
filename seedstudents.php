<?php

	include("_includes/config.inc");
	include("_includes/dbconnect.inc");
	include("_includes/functions.inc");
	
	
	if (isset($_SESSION['id']))
	{	
					
		$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('61983081', 'Master', '1974-02-17', 'Izotz', 'Zeng', '12', 'Linden', 'Salford', 'UK', 'M6 7HT'), ('64433421', 'a4*vV;6p:]\\/qWWt', '1948-04-07', 'Gustave', 'Colt', '22', 'Hill', 'Dudleston', 'UK', 'SY12 9NA'), ('98850215', 'dUbSYxv{tk@5vv-5', '1969-12-22', 'Wacława', 'Kuijpers', 'Rose', 'Heol Y Mynydd', 'Southerndown', 'UK', 'CF32 0SN'), ('97686560', '!ZrtXuDE/4.', '1987-05-22', 'Rayna', 'Harrell', '34', 'Wyresdale', 'St Helens', 'UK', 'WA10 6QQ'), ('83060305', 'x4dV3Q,=n(~;5>zq', '2000-01-15', 'Shammuramat', 'Nussbaum', '7', 'Barley Field', 'Halton', 'UK', 'LS15 7UE');";

		mysqli_query($conn, $sql);
			
		
		echo "New students successfully added!";	
	}

?>