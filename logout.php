<?php
session_start();
if(isset($_SESSION['usn']))
  unset($_SESSION['usn']);
  header('Location:index.php');
?>