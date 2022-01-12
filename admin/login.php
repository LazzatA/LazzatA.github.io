<!DOCTYPE html>
<html>
<head>
	<title>User panel</title>
  <link rel="icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'links.php'?>


  <?php
    $con=mysqli_connect("localhost","root","","log");
    if(isset($_POST['log'])){
      $phone = mysqli_real_escape_string($con,$_POST['phone']);


      if($phone!=""){
        $sql = "SELECT id FROM crud WHERE phone='$phone'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
        if($count==1) {
          header("location:mainpage1.php");
		}
		else{
		echo "<script>alert(\"Вы ввели неверный ИИН\");</script>";
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
			<form class="" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>IIN</h5>
           		   		<input type="text" class="input" name="phone" 
                    value="" autocomplete="off">
           		   </div>
           		</div>
           		
            	<button  type="submit" class="btn" action="mainpg.php" name="log" onclick="return confirm('Do you want to enter?');">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" 
    src="js/main.js"></script>
</body>
</html>

