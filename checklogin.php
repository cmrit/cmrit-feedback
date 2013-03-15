<?php

// username and password sent from form
$usn=$_POST['usn'];

// To protect MySQL injection (more detail about MySQL injection)
$usn = stripslashes($usn);


session_start();
$_SESSION['usn']=$usn;

$url="location:home.php?usn=";
$url.=$usn;
header($url);

?>