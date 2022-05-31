<?php

	include("_includes/config.inc");
	include("_includes/dbconnect.inc");
	include("_includes/functions.inc");
	
	
	if (isset($_SESSION['id']))
	{	
					
		$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('61983081', 'Master', '17/02/1974', 'Izotz', 'Zeng', '12', 'Linden', 'Salford', 'UK', 'M6 7HT'), ('64433421', 'a4*vV;6p:]\\/qWWt', '07/04/1948', 'Gustave', 'Colt', '22', 'Hill', 'Dudleston', 'UK', 'SY12 9NA'), ('98850215', 'dUbSYxv{tk@5vv-5', '22/12/1969', 'Wacława', 'Kuijpers', 'Rose', 'Heol Y Mynydd', 'Southerndown', 'UK', 'CF32 0SN'), ('97686560', '!ZrtXuDE/4.', '22/05/1987', 'Rayna', 'Harrell', '34', 'Wyresdale', 'St Helens', 'UK', 'WA10 6QQ'), ('83060305', 'x4dV3Q,=n(~;5>zq', '15/01/2000', 'Shammuramat', 'Nussbaum', '7', 'Barley Field', 'Halton', 'UK', 'LS15 7UE');";

		mysqli_query($conn, $sql);
			
		
		echo "New students successfully added!";	
	}

?>