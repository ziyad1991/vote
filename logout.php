<?php session_start(); ?>


<?php
$_SESSION['name'] = null;
$_SESSION['password'] = null;
$_SESSION['lastname'] = null;
$_SESSION['role'] = null;



 header("location: ../vote/login.php");











?>