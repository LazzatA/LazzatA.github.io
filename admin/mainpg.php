<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<title>Schedule</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/stylenav.css">
	<link rel="stylesheet" href="home1.css">
	<link  href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>
		$(document).ready(function(){
			$('#icon').click(function(){
				$('ul').toggleClass('show');
			});
		});
	</script>

	
</head>
<body>
	<nav>
		<label class="logo">Smart school</label>
		<ul>
					<li><a href="indexed.php" >Logout</a></li>
		</ul>
		<label id="icon">
			<i class="fas fa-bars"></i>
			
		</label>
	</nav>

	<table>
		<tr>
			<th>Lesson №</th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
			<th>Saturday</th>

		</tr>
		     <?php include 'links.php'?>
		<?php

// Create connection
		$conn = new mysqli('localhost','root', '', 'log');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT lesson, monday, tuesday, wednesday, thursday, friday, saturday FROM schedule";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["lesson"] . "</td><td>" .$row["monday"] . "</td><td>" .$row["tuesday"] ."</td><td>" .$row["wednesday"] . "</td><td>" .$row["thursday"] . "</td><td>" .$row["friday"] . "</td><td>" .$row["saturday"] . "</td><td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
	</table>
</body>
</html>