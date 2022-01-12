<!DOCTYPE html>
<html>
<head>
<title>Timetable for 12B</title>
<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="table.css">

<?php
$localhost = "localhost"; //localhost
$dbusername = "root"; //username of phpmyadmin
$dbpassword = "";  //password of phpmyadmin
$dbname = "fake";  //database name
 
//connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
?>
<table width=100% border=1>


<?php
//select content from the db table
$query=mysqli_query($conn,"SELECT * FROM fake1");
while($row=mysqli_fetch_array($query)){
    $name=$row['name'];
    $lesson=$row['lesson'];    
    $monday=$row['monday'];
    $tuesday=$row['tuesday']; 
    $wednesday=$row['wednesday'];
    $thursday=$row['thursday']; 
    $friday=$row['friday']; 
    $saturday=$row['saturday'];
    

    ?>
    <tr>
    <td><?php echo $name; ?></td> <td><?php echo $lesson;?></td><td><?php echo $monday;?></td><td><?php echo $tuesday;?></td><td><?php echo $wednesday;?></td><td><?php echo $thursday;?></td><td><?php echo $friday;?></td><td><?php echo $saturday;?></td>
    </tr>

    
    <?php
}

?>
</table>
