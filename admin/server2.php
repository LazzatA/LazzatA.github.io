<?php
 session_start();

 // variable declaration
 $name = "";
 $email = "";
 $IIN = "";
 $errors = array();
 $_SESSION['success'] = "";

 // connect to database
 $db = mysqli_connect('localhost', 'root', '', 'log');

 // REGISTER USER
 if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $IIN = mysqli_real_escape_string($db, $_POST['IIN']);
  
 // form validation: ensure that the form is correctly filled
  if (empty($name)) { array_push($errors, "Fill in the NAME field"); }
  

  
  
  // register user if there are no errors in the form
  if (count($errors) == 0) {
   $query = "INSERT INTO crud (name, email, IIN)
       VALUES('$name', '$email', '$IIN')";
   mysqli_query($db, $query);

   $_SESSION['name'] = $name;
   $_SESSION['success'] = "You have registered succesfully";
   header('location: indexed.php');
  }

 
 }

?>