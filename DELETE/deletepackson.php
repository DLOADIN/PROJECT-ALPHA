<?php
$con=mysqli_connect('localhost','root','','barber');
$id=$_GET['id'];
$sql=mysqli_query($con,"DELETE FROM packson WHERE id='$id' ");
header('location:../barberdetails.php');
?>