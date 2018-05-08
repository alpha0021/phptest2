<!DOCTYPE html>
<html>
<head>
	<title>priniting random name from array</title>
</head>
<body>
    <p>
		<?php
		// Create an array and push on the names
		// of your closest family and friends
		$family = array();
		
		array_push($family, "nasrul");
		array_push($family, "kabir");
		array_push($family, "rushdi");
		array_push($family, "tartila");
		array_push($family, "arif");
		array_push($family, "rajiv");
		array_push($family, "ankita");
		array_push($family, "ahmud");
		// Sort the list
		sort($family);
		// Randomly select a winner!
		// Randomly select a winner!
			$max = count($family) - 1;
			$winner = $family[rand(0, $max)];
		// Print the winner's name in ALL CAPS
			$big = strtoupper($winner);
			
			echo "<p>$big</p>";
			
		?>
	</p>
</body>
</html>