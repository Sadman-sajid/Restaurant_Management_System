<?php
session_start();


//Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/food_order/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_name','food-order');
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
$db_select=mysqli_select_db($conn,'food-order') or die(mysqli_error());
?>