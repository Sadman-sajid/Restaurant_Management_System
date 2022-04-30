<?php include("../view/menu.php"); ?>
<div class="main-content">
    <div class="wrapper">
        <h2>Add Admin</h2>
         <br><br>
         <?php
          if(isset($_SESSION['add']))
         {
            echo $_SESSION['add'];
        unset($_SESSION['add']);
         }
         ?>
        <form action=""method="POST">
            <table class="tbl-30">
             <tr>
                <td>FullName: </td>
                <td><input type="text" name="full_name" placeholder="Enter Your Name" ></td>  
             </tr>
             <tr>
                <td>UserName: </td>
                <td><input type="text" name="username" placeholder="Enter Your UserName" ></td>  
             </tr>
             <tr>
                <td>Password: </td>
                <td><input type="password" name="password" placeholder="Enter Your Password"> </td>  
             </tr>
             <tr>
                <td colspan="2"> </td>
                <td><input type="submit" name="submit" value="Add Admin" class="btn-secondary"> </td>  
             </tr>

            </table>
        </form>
    </div> 
</div>
<?php include("../view/footer.php"); ?>  
<?php
     // Process the value from form and save it in database
     //check whether the submit button is clicked or not
     if(isset($_POST['submit']))
    {
     //button clicked
     //echo "Button Clicked";

     //1. get the data from form
     $full_name = $_POST['full_name'];
     $username = $_POST['username'];
     $password =md5( $_POST['password']);

     //2. sql query to save the data into database 
     $sql = "INSERT INTO tbl_admin SET
     full_name='$full_name',
     username='$username',
     password='$password'"
     ;

     // 3. execute query and save data in database
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

     if($res==TRUE)
     {
      $_SESSION['add']="Admin Added Successfully";
      header("location:" .SITEURL.'view/manage-admin.php');
     }
     else
     {
      $_SESSION['add']="Failed to Add Admin";
      header("location:".SITEURL.'model/add-admin.php');
     } 
     
   }
    
?>          