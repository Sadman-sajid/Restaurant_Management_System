<?php 
include('../controller/constants.php');
include('../controller/login-check.php'); ?>

<html>
    <head>
    <title>Food Order Website - Home Page</title>

    <link rel="stylesheet" href= "admin.css">

    </head>
    <body>
    <!-- Menu Section Starts -->
    <div class = "menu text-center">
       <div class= "wrapper">
             <ul>
                 <li><a href= "../view/index.php">Home</a></li>
                 <li><a href= "../view/manage-admin.php">Admin</a></li>
                 <li><a href= "../view/manage-category.php">Category</a></li>
                 <li><a href= "../view/manage-food.php">Food</a></li>
                 <li><a href= "../view/manage-order.php">Order</a></li>     
                 <li><a href= "../controller/logout.php">Logout</a></li>   
             </ul>   
       </div>
    </div>
    <!-- Menu Section Ends -->