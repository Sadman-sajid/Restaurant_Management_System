 <?php include ("menu.php"); ?>

    <!-- Main Content Section Starts -->
    <div class = "main-content">
        <div class= "wrapper">
            <h2>Manage Admin</h2>

<br />
<?php
    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    if(isset($_SESSION['delete']))
    {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    } 
    if(isset($_SESSION['update']))
    {
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    } 
    if(isset($_SESSION['update']))
    {
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    } 
    if(isset($_SESSION['user-not-found']))
    {
        echo $_SESSION['user-not-found'];
        unset($_SESSION['user-not-found']);
    } 
    if(isset($_SESSION['pwd-not-match']))
    {
        echo $_SESSION['pwd-not-match'];
        unset($_SESSION['pwd-not-match']);
    } 
    if(isset($_SESSION['change-pwd']))
    {
        echo $_SESSION['change-pwd'];
        unset($_SESSION['change-pwd']);
    } 
?>
<br><br><br>
            <a href= "../model/add-admin.php" class="btn-primary">Add Admin</a>

</br> </br> </br> 
            <table class= "tbl-full">
                <tr>
                    <th>S.N</th>
                    <th>FullName</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                <?php 
                //query to get all admin
                $sql="SELECT * FROM tbl_admin";
                $res=mysqli_query($conn,$sql);
                if($res==TRUE)
                {
                    $count=mysqli_num_rows($res);
                    $sn=1;
                    if($count>0)
                    {
                     while($rows=mysqli_fetch_assoc($res)) 
                     {
                        $id=$rows['id'];
                        $full_name=$rows['full_name'];
                        $username=$rows['username'];
                        ?>
                        <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php echo $full_name; ?></td>
                    <td><?php echo $username; ?></td>
                    <td>
                        <a href= "<?php echo SITEURL; ?>model/update-password.php?id=<?php echo $id; ?>" class="btn-primary"> Change Password </a>
                        <a href= "<?php echo SITEURL; ?>model/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Info</a>
                        <a href= "<?php echo SITEURL; ?>model/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Info</a>
                    </td>
                    </tr>
                     <?php
                     }
                    }
                    else
                    {

                    }
                }
                ?>                
            </table>   
        </div>
    
    </div>
    <?php include('footer.php'); ?> 