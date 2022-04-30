 <?php include('constants.php') ?>
 <html>
     <head>
         <title>Login</title>
         <link rel="spreadsheet" href="./view/admin.css">
     </head>
     <body>
         <div class="login">
             <h1 class="text-center">Login</h1><br><br>
            <?php 
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            } 
            if (isset($_SESSION['no-login-message']))
            {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>    
            <br><br>    
            
            
             <form action="" method="POST" class="text-center">
                 Username: <br>
                 <input type="text" name="username" placeholder="Enter Username"><br><br>
                 Password:<br>
                 <input type="password" name="password" placeholder="Enter Username"><br><br>

                 <input type="submit" name="submit"value="Login" class="btn-primary">
</form>
             <p class="text-center">Created by - <a href="www.sadmansajid.com"> Sadman Sajid</a></p>
</div>
     </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    $res=mysqli_query($conn, $sql);

    $count=mysqli_num_rows($res);

    if($count==1){
        $_SESSION['login']= "<div class='success'>Login Successful.</div>";
        $_SESSION['user']=$username;
        header('location:'.SITEURL.'view/');
    }
    else{
        $_SESSION['login']= "<div class='success'>Username or password did not match.</div>";
        header('location:'.SITEURL.'controller/login.php');
    }
}
?>