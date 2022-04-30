<?php
include('../controller/constants.php');

if(isset($_GET['id']) AND isset($_GET['image_name']))
{
$id=$_GET['id'];
$image_name=$_GET['image_name']; 

if($image_name!="")
{
$path="../images/food/".$image_name;
$remove=unlink($path);
if($remove==FALSE)
{
    $_SESSION['upload']="<div class='error'>Failed to remove image file.</div>";
    header('location:'.SITEURL.'view/manage-food.php');     
    die();
}
}
    $sql = "DELETE FROM tbl_food WHERE id=$id";
    $res = mysqli_query($conn,$sql);
if ($res==true)
{
    $_SESSION['delete']="<div class='success'>Food deleted successfully.</div>";
    header('location:'.SITEURL.'view/manage-food.php');
}
    else
    {
        $_SESSION['delete']="<div> class='error'>Failed to delete food.</div>";
        header('location:'.SITEURL.'view/manage-food.php'); 
    }
}
else
{
    $_SESSION['unauthorize']="<div> class='error'>Unauthorized access.</div>";
    header('location:'.SITEURL.'view/manage-food.php');     
}







?>