<?php
session_start();
	$con=mysqli_connect('localhost','root','','barber');
	
	if(!$con){
	 die(mysql_error($con));
	}
?>