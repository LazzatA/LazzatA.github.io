<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$monday = "";
	$tuesday = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$monday = $_POST['monday'];
		$tuesday = $_POST['tuesday'];

		mysqli_query($db, "INSERT INTO info (monday, tuesday) VALUES ('$monday', '$tuesday')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: seven.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$monday = $_POST['monday'];
	$tuesday = $_POST['tuesday'];

	mysqli_query($db, "UPDATE info SET monday='$monday', tuesday='$tuesday' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: seven.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: seven.php');
}