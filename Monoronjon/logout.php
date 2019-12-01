<?php 
include('connection.php');


unset($_SESSION['fName']);
unset($_SESSION['lName']);
header('location: login.php');




?>