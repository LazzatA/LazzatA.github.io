<?php include('server3.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Seven</title>

<?php include'style7.css' ?>

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/stylenav.css">
	
  <link rel="icon" href="favicon.ico">

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

 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />


  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>



</head>
<body>
<nav>
		<label class="logo">Smart school</label>
		<ul>
			<li><a class="active" href="mainpage.php">Home</a></li>
			<li><a href="users.php">Users</a></li>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a href="logout.php" class="btn btn-danger">Logout</a></li>
		</ul>
		<label id="icon">
			<i class="fas fa-bars"></i>
			
		</label>
	</nav>

<div class="container register">
  <div class="row">
    <div class="col-md-3 register-left">
      <h3>Edit timetable</h3>
      <p>Please, fill all the details carefully.</p>
      <a href="select7.php">Check Form</a> <br>
    </div>

  <div class="col-md-9 register-right">
    <div class="tab-content" id="home" role="tabpanel" aria-labelledby="home-tab">
      <h3>Add records</h3>

      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="row register-form">

          <div class="col-md-6">
      <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter the grade" name="grade" value="" required>
        </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter lessons of monday" name="monday" value="" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter lessons of tuesday" name="tuesday" value="" required>
            </div>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter lessons of wednesday" name="wednesday" value="" required>
            </div>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter lessons of thursday" name="thursday" value="" required>
            </div>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter lessons of friday" name="friday" value="" required>
            </div>
             <div class="form-group">
              <input type="text" class="form-control" placeholder="Enter lessons of satureday" name="saturday" value="" required>
            </div>

            <input type="submit" name="submit" class="btnRegister" value="Register">
          </div>
        </div>
        
      </form>
    </div>
  </div>
    
  </div>
</div>


</body>
</html>

