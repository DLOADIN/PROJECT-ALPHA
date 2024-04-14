<?php
include ("connection.php");
$_SESSION = [];
session_unset();
session_destroy();
header('location:loginform.php');
?>