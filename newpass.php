<?php
session_start();
$showAlert=false;
$showmailsend=false; 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
include "db_connect.php";
$username=$_SESSION['userame'];
$password=$_POST['password'];
$newpassword=$_POST['cpassword'];
 $sl="SELECT * FROM `info of signup` WHERE `username`='$username'";
 $ret=mysqli_query($conn,$sl);
 $manav= mysqli_num_rows($ret);
 if($manav==1)
 {
    if($password==$newpassword)
{
    $row = mysqli_fetch_assoc($ret);
    $email=$row['email id'];
    $var= base64_encode($password);
    $sql="UPDATE `info of signup` SET `password` = '$var' WHERE `info of signup`.`username` = '$username'";
   
$to = "$email";
$subject = "From bookbarns";
$message = "
<html>
<head>
</head>
<body>
<h2>Your password is updated</h2>
<p>New password:- $newpassword</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
 $headers .= 'From: <webmaster@example.com>' . "\r\n";
//$headers .= 'Cc:mmmm' . "\r\n";


if (!mail($to, $subject, $message, $headers))
$showmailsend="please try again later";
$result1 = mysqli_query($conn,$sql);
if($result1){
 header("location: frontpage.php");
}

    }

}
else{
    $showAlert="password does not match";
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
      
        <style>
             body{
                background: linear-gradient(90deg, #755bea, #ff72c0);
            }
            .container-login2 small,
            label,
            h1 {
                margin-left: 10px;
            }
            
            .container-login2 input {
                margin-left: 10px;
                border: 4px solid white;
                border-radius: 6px;
            }
            
            .container-login2 h2 {
                text-align: center;
            }
            .container-login2 h1{
                margin-bottom:14px;
                margin-top:5px;
            }
            
            .container-login2 {
                border: 3px groove white;
                background-color: black;
                border-radius: 20px;
                margin: auto;
                margin-top: 130px;
                width: 500px;
                position: relative;
                height: auto;
                color: white;
                text-align: left;
                font-family: 'Arial';
            }
            
            .container-login2 .login-btn {
                width: 180px;
                height: 30px;
                margin-left: 80px;
                border-radius: 25px;
                margin-bottom: 20px;
                border-color: white;
                font-size: 17px;
                font-weight: 600;
                border-style: groove;
            }
        </style>
    </head>

    <body>
        <?php
       if($showAlert){
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error! </strong>'.$showAlert.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
     </div>';
     } 
     if($showmailsend){
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Success! </strong>'.$showmailsend.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
     </div>';
     } 
    ?>

            <form action="newpass.php" method="post">
                <div class="container-login2">
                    <h1>
                        Password Recovery
                    </h1>
                    <label for="password"style="margin-top:5px;">Password</label><br>
                    <input type="password" name="password" height="20px" size="35px" placeholder="new password" required></br>
                    <label for="cpassword"style="margin-top:5px;">Confirm password</label><br>
                    <input type="password" name="cpassword" height="20px" size="35px" placeholder="re enter" required>
                    <br><br>
                    <input type="submit" class="login-btn" value="Change Password" name="change"></input><br>

                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>