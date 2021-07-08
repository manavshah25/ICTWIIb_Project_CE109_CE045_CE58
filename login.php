<?php

session_start();
$showError=false;
$showErrorsever=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$servername="localhost";
$username="root";
$password="";
$database="member of website";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn)
 {
     die("<center>"."sorry we failed to connect:".mysqli_connect_error()."</center>");

 }
 else{

    $username=$_POST["username"];

    $password=$_POST["password"];
    $var= base64_encode($password);
    $s="SELECT * FROM `info of signup` WHERE `username`='$username' and `password`='$var'";
        $re=mysqli_query($conn,$s);
        $drasthi= mysqli_num_rows($re);

        if($drasthi!=1)
        {
            
            $showError="invaild ceretainals";
        }
        else{
            $row = mysqli_fetch_assoc($re);
            $_SESSION['email']=$row['email id'];
            $email=$_SESSION['email'];
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $sql="SELECT * FROM `info of signup`";
            $ret=mysqli_query($conn,$sql);
            $usercount= mysqli_num_rows($ret);
            $_SESSION['usercount']=$usercount;
$to = "$email";
$subject = "From bookbarns";

$message = "
<html>
<head>
<style>
h2{
    text-align: center;
    font-size: 40px;
    font-weight: 500;
}  
</style>
</head>
<body>
<h2>You are logged in...</h2>
<p>Welcome $username to our website and enjoy our services and explore..</p>
<h3>Read & Share...</h3>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
 $headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc:mmmm' . "\r\n";


if (mail($to, $subject, $message, $headers))
header("location: frontpage.php");
else
$showErrorsever="Sever is not responding plz try again later";


      
           

        }
 }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        header{
            background: transperent;
            padding:4px 10px;
        
        }
        .navigation a{
            font-size:30px;
            margin-left:170px;
        }
          .navigation a:hover{
              color:white;
              text-decoration:none;
          }
        </style>
</head>

<body>
<header>
        <a href="#" class="brand"></a>
        <div class="shif">
            <div class="navigation">
               
                <a href="adminlogin.php">Admin login</a>
                <a href="login.php">User login</a>
                <a href="sigin.php">Sign up</a>

                <a href="frontpage.php">Store</a>
            </div>
        </div>
        </header>
    <?php
if($showError){
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'.$showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';}
        if($showErrorsever){
            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$showErrorsever.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>';}
    ?>
   


    <form action="login.php" method="post">
        <div class="container-login1" id="login3">

            <h2>  User Login</h2>

            <label for="username">Username</label><br>
            <input type="text" name="username" size="40px" placeholder="Username" required>
            <br>
            <br>
            <br>
            <label for="password">Password</label>
            <div class="forget1"><a href="forgot1.php">Forgot Passward</a></div>
            <input type="password" name="password" class="login_user" id="email" size="40px" placeholder="password" required><i class="fas fa-eye"></i>
            <br>
            <br>
            <br>
            <input type="submit" class="login-btn9" value="LOG IN" name="submit"></input>

            <h4 style="margin-left:10px;font-size:20px;">
                New user ?
                <div id="myBtn9">
                    <a href="sigin.php"> sign up</h>
                </a></div>
            </h4>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <section>
   <button><a href="index.php">Home page</a></button>
</section>

</body>
</html>