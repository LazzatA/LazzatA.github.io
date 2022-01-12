<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico">

  <?php include 'links.php'?>


    <?php
    $con=mysqli_connect("localhost","root","","log");
    if(isset($_POST['log'])){
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $passwd = mysqli_real_escape_string($con,$_POST['password']);

      if($username!="" && $passwd!=""){
        $sql = "SELECT id FROM login WHERE username='$username' and passwd='$passwd'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        if($count==1) {
          header("location:mainpage.php");
		}
		else{
		echo "<script>alert(\"Неверный логин или пароль\");</script>";
		}
      }
    } 
    ?>




</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bf.svg">
		</div>
		<div class="login-content">
			<form class="" action="index.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username" 
                    value="" autocomplete="off">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" 
                    value="" autocomplete="off">
            	   </div>
            	</div>
            	<button  type="submit" class="btn" name="log" onclick="return confirm('Do you want to enter?');">Login</button> 
            </form>
        </div>
    </div>
    <script type="text/javascript" 
    src="js/main.js"></script>
</body>
</html>

