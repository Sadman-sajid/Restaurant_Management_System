<?php
include('../controller/constants.php');

 $id=$_GET['id'];
$sql = "DELETE FROM tbl_admin WHERE id=$id";
$res = mysqli_query($conn,$sql);
if ($res==true)
{
    $_SESSION['delete']="Admin deleted Successfully";
    header('location:'.SITEURL.'view/manage-admin.php');
}
    else
    {
        $_SESSION['delete']="Failed to delete Admin. Try again later";
        header('location:'.SITEURL.'view/manage-admin.php'); 
    }

?>