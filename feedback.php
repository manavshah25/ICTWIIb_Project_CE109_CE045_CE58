<?php
session_start();
$showalert=false;
if(isset($_POST['submit']))
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

    $username=$_SESSION['username'];
    $user=$_POST['name'];
    $email=$_POST['email'];
    $review=$_POST['review'];
    $rate=$_POST['rate'];

                 $sql= "INSERT INTO `feedback` (`serial no.`, `username`, `email id`, `text`, `name`, `date` ,`rate`) VALUES (NULL, '$username', '$email', '$review', '$user', current_timestamp(),'$rate')";
                 $r=mysqli_query($conn,$sql);
                 if($r)
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
                    <h2>Thanks for sharing your feedback</h2>
                    <p>Your review will help us to improve and it is very valuable for us</p>
                    <h3>Your opinion matters</h3>
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
                    {
                        header("location: frontpage.php");

                    }
                    else{
                        header("location: feedback.php");

                    }
                    
                   
                    
    
                 }
        


 }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body>
    <?php
if($showalert){
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Error!</strong>'.$showalert.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';}
        ?>
         <form action="feedback.php" method="post">
    <div class="container">
   
        <label class="suggestion">SUGGESTION</label>
        <div class="username">
            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email"></br>
            <label for="name"><b>Name:</b></label>
            <input type="text" id="name" name="name">
        </div>
        <div class="star-width">
            <input type="radio" name="rate" id="rate-5"><label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4"><label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3"><label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2"><label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1"><label for="rate-1" class="fas fa-star"></label>
          
          <span>
                <header></header></span>
                <div class="textarea">
                    <textarea cols="30"  name="review" id="review" placeholder="Share your views"></textarea>
                </div>
                <div class="btn">
                    <button type="submit" name="submit" >Share</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- <script>
        function myFunction() {onclick="myFunction()"
            alert("Thanks for your review!");
        }
    </script> -->
</body>

</html>