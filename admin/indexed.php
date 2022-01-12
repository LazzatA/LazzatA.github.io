
<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
	<link rel="icon" href="favicon.ico">
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

     <?php include 'links.php'?>

</head>
<body>
	<nav>
		<label class="logo">Smart school</label>
		<ul>
			<li><a class="active" href="indexed.php">Home</a></li>
			<li><a href="index.php">Admin Panel</a></li>
			<li><a href="login.php" class="btn btn-danger">Login</a></li>
			<li><a href="register.php" class="btn btn-sky">Register</a></li>
		</ul>
		<label id="icon">
			<i class="fas fa-bars"></i>
			
		</label>
	</nav>

	<section></section>

	<div class="services-section">
		<div class="inner-width">
			<h1 class="section-title">Our Services</h1>
			<div class="border"></div>
			<div class="services-container">
				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-paint-brush"></i>
					</div>
					<div class="section-title">Online Schedule</div>
					<div class="service-desc">
						Schedule Builder is a free web application, for creating weekly/daily schedules for any activity. 
                        Get started by simply adding activities directly to the schedule.
					</div>
				</div>
				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-user"></i>
					</div>
					<div class="section-title">Users</div>
					<div class="service-desc">
						School administration take control on users of school.
					</div>
				</div>
				<div class="service-box">
					<div class="service-icon">
						<i class="fas fa-brush"></i>
					</div>
					<div class="section-title">Events</div>
					<div class="service-desc">
						Schedule Builder is a free web application, for creating weekly/daily schedules for any events. 
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

