<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculation</title>
</head>
<body>
	<h1>Electricity Bill Calculation</h1>
	<form method="POST">
		<label for="units">Enter Units Consumed:</label>
		<input type="text" name="units" id="units" required>
		<button type="submit">Calculate</button>
	</form>
	<?php
	// Check if form is submitted
	if(isset($_POST['units'])) {
		// Get the number of units consumed
		$units = $_POST['units'];
		
		// Electricity bill calculation based on units consumed
		if($units <= 50) {
			$bill = $units * 3.50;
		} elseif($units <= 150) {
			$bill = (50 * 3.50) + (($units - 50) * 4.00);
		} elseif($units <= 250) {
			$bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
		} else {
			$bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
		}
		
		// Display the electricity bill
		echo "<h2>Electricity Bill: Rs. " . number_format($bill, 2) . "</h2>";
	}
	?>
</body>
</html>