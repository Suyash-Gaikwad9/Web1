<html>
<head>
<title>Electricity Bill Calculator</title>
 <link rel="stylesheet" href="lab7.css">
 <style>
 body {
font-family: Arial, sans-serif;
background-color: #f2f2f2;
padding: 20px;
}
h1 {
text-align: center;
color: #333;
margin-bottom: 30px;
}
form {
background-color: #fff;
padding: 20px;
border: 2px solid #ddd;
border-radius: 5px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
label {
display: block;
font-weight: bold;
margin-bottom: 10px;
}
input[type="number"] {
padding: 10px;
border-radius: 5px;
border: 1px solid #ccc;
margin-bottom: 20px;
}
input[type="submit"] {
background-color: #008CBA;
color: #fff;
padding: 10px 20px;
border-radius: 5px;
border: none;
cursor: pointer;
}
input[type="submit"]:hover {
background-color: #006F8E;
}
h2 {
color: #333;
margin-top: 30px;
}
.conditions {
background-color: #fff;
padding: 20px;
border: 2px solid #ddd;
border-radius: 5px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
margin-bottom: 20px;
}
.conditions h2 {
margin-top: 0;
color: #333;
margin-bottom: 10px;
}
.conditions ul {
margin: 0;
padding: 0;
list-style: none;
}
.conditions ul li {
margin-bottom: 5px;
font-size: 16px;
line-height: 1.5;
}
p {
margin: 10px 0;
}
 </style>
</head>
<body>
<h1>Electricity Bill Calculator</h1>
<?php
// Initialize variables
$prev_reading = 0;
$curr_reading = 0;
$units_consumed = 0;
$bill_amount = 0;
// Check if form submitted
if(isset($_POST['submit'])) {
// Get input values
$prev_reading = $_POST['prev_reading'];
$curr_reading = $_POST['curr_reading'];
// Calculate units consumed
$units_consumed = $curr_reading - $prev_reading;
// Calculate bill amount based on units consumed
if($units_consumed <= 50) {
$bill_amount = $units_consumed * 3.5;
} elseif($units_consumed <= 150) {
$bill_amount = $units_consumed * 4.0;
} elseif($units_consumed <= 250) {
$bill_amount = $units_consumed * 5.2;
} else {
$bill_amount = $units_consumed * 6.5;
}
}
?>
<div class="conditions">
<h2>Conditions for Calculating Electricity Bill</h2>
<ul>
<li>For first 50 units - Rs. 3.50/unit</li>
<li>For 150 units - Rs. 4.00/unit</li>
<li>For 250 units - Rs. 5.20/unit</li>
<li>For units above 250 - Rs. 6.50/unit</li>
</ul>
</div>
<form method="post" action="">
<label>Previous Reading:</label>
<input type="number" name="prev_reading" value="<?php echo $prev_reading; ?>" required>
<br>
<label>Current Reading:</label>
<input type="number" name="curr_reading" value="<?php echo $curr_reading; ?>" required>
<br><br>
<input type="submit" name="submit" value="Calculate Bill">
</form>
<?php if($bill_amount > 0) { ?>
<h2>Bill Details:</h2>
<p>Previous Reading: <?php echo $prev_reading; ?></p>
<p>Current Reading: <?php echo $curr_reading; ?></p>
<p>Units Consumed: <?php echo $units_consumed; ?></p>
<p>Bill Amount: Rs. <?php echo $bill_amount; ?></p>
<?php } ?>
</body>
</html>