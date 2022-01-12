<!DOCTYPE html>
<html>
<head>
	<title>Check list</title>
	<?php include 'style7.css' ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesom/4.7.0/css/font-awesom.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main-div">
	<h1>List of subjects</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<th>grade</th>
					<th>monday</th>
					<th>tuesday</th>
					<th>wednesday</th>
					<th>thursday</th>
					<th>friday</th>
					<th>saturday</th>
					
				</thead>
				<tbody>
            <?php
            include 'dbcon7.php';
            $selectquery = "select * from schedule ";
            $query = mysqli_query($con, $selectquery);
            $result = mysqli_fetch_assoc($query);
            while($result = mysqli_fetch_assoc($query)){

            ?>
                    <tr>
						<td><?php echo $result['grade']; ?></td>
						<td><?php echo $result['monday']; ?></td>
						<td><?php echo $result['tuesday']; ?></td>
						<td><?php echo $result['wednesday']; ?></td>
						<td><?php echo $result['thursday']; ?></td>
						<td><?php echo $result['friday']; ?></td>
						<td><?php echo $result['saturday']; ?></td>
						<td><a href="update.php?id=<?php echo $result['grade']; ?>"><i class="fa fa-edit"></i>edit</a></td>
						<td><a href="delete.php?id=<?php echo $result['grade']; ?><i class="fa fa-trash aria-hidden="true"></i>delete</a></td>
					</tr>
                <?php

			}
	            ?>

             
       



				</tbody>
			</table>
			
		</div>
	</div>
</div>
</body>
</html>