<?php
$con=mysqli_connect('localhost','root','','barber');
date_default_timezone_set("Etc/GMT+2");
$sql=mysqli_query($con,"SELECT * from promotion ");
$currentdatee = date('Y-m-d');
while($fetch = mysqli_fetch_array($sql)){
if($fetch['u_expiringdate'] < $currentdatee){
mysqli_query($con,"DELETE FROM promotion WHERE 	id='$fetch[id]'")
or
die(mysqli_error());
}
}
?>