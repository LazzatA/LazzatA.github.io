<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$name="";
	$time="";
	$place="";
	$who="";

	if(isset($_POST['addd'])){
        $name=$_POST['name'];
        $time=$_POST['time'];
		$place=$_POST['place'];
		$who=$_POST['who'];

		$query="INSERT INTO event(name,time,place,who)VALUES(?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssss",$name,$time,$place,$who);
		$stmt->execute();
	

		header('location:events1.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$query="DELETE FROM events WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:events1.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM events WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$name=$row['name'];
		$time=$row['time'];
		$place=$row['place'];
		$who=$row['who'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$time=$_POST['time'];
        $place=$_POST['place'];
        $who=$_POST['who'];
		
		$query="UPDATE events SET name=?,time=?,place=?,who=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssi",$name,$time,$place,$who,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:index.php');
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM events WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vid=$row['id'];
		$vname=$row['name'];
		$vtime=$row['time'];
		$vplace=$row['place'];
		$vwho=$row['who'];
	}
?>