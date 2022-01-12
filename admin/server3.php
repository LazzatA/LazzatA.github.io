<?php
 session_start();

 // variable declaration
 $grade="";
 $monday = "";
 $tuesday    = "";
 $wednesday    = "";
 $thursday = "";
 $friday    = "";
 $saturday    = "";
 $errors = array();
 $_SESSION['success'] = "";

 // connect to database
 $db = mysqli_connect('localhost', 'root', '', 'log');

 // REGISTER USER
 if (isset($_POST['submit'])) {
  // receive all input values from the form
  $grade = mysqli_real_escape_string($db, $_POST['grade']);
  $monday = mysqli_real_escape_string($db, $_POST['monday']);
  $tuesday = mysqli_real_escape_string($db, $_POST['tuesday']);
  $wednesday = mysqli_real_escape_string($db, $_POST['wednesday']);
  $thursday = mysqli_real_escape_string($db, $_POST['thursday']);
  $friday = mysqli_real_escape_string($db, $_POST['friday']);
  $saturday = mysqli_real_escape_string($db, $_POST['saturday']);
 

  

  // register user if there are no errors in the form
  if (count($errors) == 0) {
   
   $query = "INSERT INTO schedule (grade, monday, tuesday, wednesday, thursday, friday, saturday)
       VALUES('$grade', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday')";
   mysqli_query($db, $query);
   
   $_SESSION['name'] = $name;
   $_SESSION['success'] = "Успешно зарегистрирована";
   header('location: mainpage.php');
  }

 }

 // ...

?>