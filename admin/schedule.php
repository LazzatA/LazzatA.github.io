<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="favicon.ico">
	<title>Schedule</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="stylenav1.css">

	<link rel="stylesheet" href="home1.css">

	<link  href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

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
			<li><a class="active" href="mainpage.php">Home</a></li>
			
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="events1.php">Events</a></li>
			<li><a href="logout.php" class="btn btn-danger">Logout</a></li>
		</ul>
		<label id="icon">
			<i class="fas fa-bars"></i>
			
		</label>
	</nav>
	
	<style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}


}

</style>
<body>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
</div>
<div class="title">
 <h1>
12th classes</h1>
</div>
<div class="des">
 <p>1st shift</p>
<button onclick="return confirm('Do you want to enter?');"><a href="jeti.php" > click to edit </button>
</div>
</div>
<!--cards -->




</div>
</body>
</html>
