<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="favicon.ico">
	<title>User panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>

<?php include 'links.php'?>

<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bf.svg">
		</div>
		<div class="login-content">
			<form class="" action="indexed.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Registration</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" class="input" name="name" 
                    value="" autocomplete="off">
           		   </div>
           		</div>
           		<div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Grade</h5>
                    <input type="text" class="input" name="email" 
                    value="" autocomplete="off">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>IIN</h5>
                    <input type="text" class="input" name="IIN" 
                    value="" autocomplete="off">
                 </div>
              </div>
            	<button  type="submit" class="btn" name="reg_user" onclick="return confirm('Do you want to register?');">Register</button> 
            </form>
        </div>
    </div>
    <script type="text/javascript" 
    src="js/main.js"></script>
</body>
</html>

