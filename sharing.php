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
     $email=$_POST["email"];    
      $authorname=$_POST["authorname"];   
        $bookname=$_POST["bookname"];
        $bookcoverlink=$_POST["bookcoverlink"];
        $booklink=$_POST["booklink"];
         $s="SELECT * FROM `info of signup` WHERE `username`='$username' and `email id`='$email'";
         $re=mysqli_query($conn,$s);
         $drasthi= mysqli_num_rows($re);
         if($drasthi==1)
         {
           $ql="INSERT INTO `sharedfile` (`id`, `username`, `email id`, `book name`, `author name`, `pdf link`, `date`, `image address`) VALUES (NULL, '$username', '$email', '$bookname', '$authorname', '$booklink', current_timestamp(), '$bookcoverlink')";
           $re=mysqli_query($conn,$ql);
           if($re)
           {         
                $to = "$email";
            $subject = "From bookbarns";
            
            $message = "
            <html>
            <head>
            <style>
            h2{
                text-align: center;
                font-size: 40x;
                font-width: 500;
            }
            </style>
            </head>
            <body>
            <h2>Thanks for sharing...</h2>
            <p>We are glad that you have share your valuable source to the needed once and we would try to share the knowledge</p>
            <h3>Thanks and share..</h3>
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
         else{
             $showError="use username and email id which was submit by you for signup";
         }
  }





 }

    ?>

    <!DOCTYPE Html>
    <html>
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
            <link rel="stylesheet" href="https//:cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
            <link rel="stylesheet" href="https//:cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
            <style>
            * {
                box-sizing: border-box;
            }
            body{
                background: url(https://i.pinimg.com/originals/6a/7e/e9/6a7ee9e8387d5d5234dafd43bd39dfad.gif)no-repeat;
                background-size: cover;
            }
            .share {
                background-color: #000000de;
                color: white;
                border: 4px solid black;
                border-radius: 20px;
                width: 30%;
                padding: 1px;
                width: 500px;
                margin-left: 450px;
                margin-top: 20px;
            }
            
            input,
            textarea {
                border-radius: 5px;
                width: 400px;
                height: 30px;
            }
            
            .info {
                margin-left: 30px;
            }
            
            input[type="submit"] {
                width: 80px;
                height: 25px;
            }
            
            input[type="reset"] {
                width: 80px;
                height: 25px;
            }
            
            input[type="text"] {
                height: 25px;
            }
        </style>
        </head>

    <body>

      
       <?php
         if($showErrorsever){
            echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>'.$showErrorsever.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>';}
            if($showError){
                echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! </strong>'.$showError.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>';}
            ?>
        <form  action="sharing.php" method="post" >
        <div class="share">
            <br><br>
            <center style="font-size: 40px;"><b>Share your Knowledge!!</b></center><br><br>
            <div class="info">
              User Name<br>
                <input type="text" name="username" required><br><br> Email ID<br>
                <input type="email" name="email" required><br><br>
                <!-- Password<br>
                <input type="password" name="pass" required><br><br> -->
                Name of book to share<br>
                <input type="text" name="bookname" required><br><br> Author Name<br>
                <input type="text" name="authorname" required><br><br> Share Book Cover link<br>
                <input type="text" name="bookcoverlink" required><br><br> Please share the book's link<br>
                <textarea name="booklink" rows="3" cols="30" required>
            </textarea><br><br>
                <pre>        <input type="submit" name="submit" value="submit">                 <input type="reset" name="reset" value="reset"><br></pre>
            </div>
            
        </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
    </html>