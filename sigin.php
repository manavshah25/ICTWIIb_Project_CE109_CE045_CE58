<?php
$showAlert=false;
$showErrorul=false;
$showErrorup=false;
$showErrorpass=false;
$showErrormail=false;
$showErroruniuser=false;
$showErrorunimail=false;
$showAlert=false;
$showErrorsever=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $err="";
    $servername="localhost";
    $username="root";
    $password="";
    $database="member of website";
     $conn=mysqli_connect($servername,$username,$password,$database);
     if(!$conn)
     {
         die("<center>"."sorry we failed to connect:".mysqli_connect_error()."</center>");

     }
     $username=$_POST["username"];
     $password=$_POST["password"];
     $confpassword=$_POST["confpassword"];
     $email=$_POST["email"];
    
     $exists=false;
     
     if((strlen($_POST['username'])<=15 && strlen($_POST['username'])>=8) && $exists==false)
   {
         $pattern="/^[a-zA-Z\d_]+$/";

       if(preg_match($pattern,$_POST['username']))
       {
        $s="SELECT * FROM `info of signup` WHERE `username`='$username'";
        $re=mysqli_query($conn,$s);
        $nisha= mysqli_num_rows($re);
        if($nisha!=1)
        {
           if($password==$confpassword)
           {
              $pass=base64_encode($password);
               if(!empty($_POST['email']))
               { 
                $sl="SELECT * FROM `info of signup` WHERE `email id`='$email'";
                $ret=mysqli_query($conn,$sl);
                $manav= mysqli_num_rows($ret);
                if($manav==1)
                {
                    $showErrorunimail="Use another email id";
                }
               else{
                 $sql="INSERT INTO `info of signup` (`serial no.`, `username`, `password`, `email id`, `data`) VALUES (NULL, '$username', '$pass', '$email', current_timestamp())";
                 $result=mysqli_query($conn,$sql);
                 if($result)
                {
                    
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
<h2>Welcome to our Family!!</h2>
<h3>Enjoy our servies</h3>
<p>Your username :- $username</p>
<p>Your password :- $confpassword</p>
<h3>Read more and Stay Tuned...</h3> 
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
$showAlert="Your account is now created and you can login";
else
$showErrorsever="Sever is not responding plz try again later";


               
                }

               }
            }
           }
           else{
               $showErrorpass="Password dose not match ";
           }
        }
        else{
            $showErroruniuser="Username is already taken";
        }
          
       }
       else{
            $showErrorup=" Username should contain small-capital alphabet,digits and special character underscore";
       }


   }
   else{
       $showErrorul=" Username must be of 8-15 character";
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
        /* login page css */

   

/* Modal Content */


/* sign up form */
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
     if($showErrorul){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorul.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErrorsever){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorsever.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErroruniuser){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErroruniuser.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErrorunimail){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorunimail.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErrorup){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorup.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showErrorpass){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showErrorpass.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>sucess!</strong>'.$showAlert.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    } 

    ?>
<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>sucess!</strong> You account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
    <form action="sigin.php" method="post">
       
        <div class="container-login">


            <h2 style="margin-top:7px;font-weight:540;">Join Book Barns</h2>
            <label for="username">Username</label><br>
            <input type="text" name="username" size="35px" placeholder="Uniqe Username" required>
            <br>
            <br>
            <label for="password">Password</label></h><br>
            <input type="password" name="password" id="psw" class="login_user" pattern="(?=.*\d)(?=.*[az])(?=.*[AZ]).{,}"  title="Must contain at least one number , one uppercase , one lowercase letter and at least 8 or more characters" size="35px" placeholder="Password" required>
            <h id="message">
                        <h3>Password must contain the following:
                        </h3>
                        <p id="letter" class="invalid">A
                            <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">
                            A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A
                            <b>number</b></p>
                        <p id="length" class="invalid">A
                            <b>length must greater than 8 but less than 15</b></p>


    </h>
            <script>
                    var myInput = document.getElementById("psw");
                    var letter = document.getElementById("letter");
                    var capital = document.getElementById("capital");
                    var number = document.getElementById("number");
                    var length = document.getElementById("length");

                    myInput.onfocus = function() {
                        document.getElementById("message").style.display = "block";
                    }

                    myInput.onblur = function() {
                        document.getElementById("message").style.display = "none";
                    }

                    myInput.onkeyup = function() {

                        var lowerCaseLetters = /[a-z]/g;
                        if (myInput.value.match(lowerCaseLetters)) {
                            letter.classList.remove("invalid");
                            letter.classList.add("valid");
                        } else {
                            letter.classList.remove("valid");
                            letter.classList.add("invalid");
                        }
                        var upperCaseLetters = /[A-Z]/g;
                        if (myInput.value.match(upperCaseLetters)) {
                            capital.classList.remove("invalid");
                            capital.classList.add("valid");
                        } else {
                            capital.classList.remove("valid");
                            capital.classList.add("invalid");
                        }

                        var numbers = /[0-9]/g;
                        if (myInput.value.match(numbers)) {
                            number.classList.remove("invalid");
                            number.classList.add("valid");
                        } else {
                            number.classList.remove("valid");
                            number.classList.add("invalid");
                        }

                        if( (myInput.value.length >= 8) && (myInput.value.length <=15) ){
                            length.classList.remove(
                                "invalid");
                            length.classList.add("valid");
                        } else {
                            length.classList.remove(
                                "valid");
                            length.classList.add("invalid");
                        }
                    }
                </script>

            <br>
            <br>
            <label for="password">Confirm Password</label></h><br>
            <input type="password" name="confpassword" class="login_user" id="" size="35px" placeholder="Confirm Password" required>
            <br>
            <br>
            <label for="email">Email Id</label><br>
            <input type="email" name="email" size="35px" placeholder="Valid Email Id" required>
            <br>
            <br>
            <!-- <label for="contact">Contact No.</label><br>
            <input type="tel" name="contact" size="35px" placeholder="Valid Contact No." pattern="[0-9]{10}" required>
            <br><small>Formate:1234567890</small> -->

            
            <div class="reset-btn">
            <input type="submit"  class="login-btn" value="Sign In" name="submit"></input>
            
            <input type="reset" class="login-btn" value="Reset" ></input>
            </div>



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