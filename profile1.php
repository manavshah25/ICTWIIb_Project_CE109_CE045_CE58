<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
    $username= $_SESSION['username'];
    $var=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
body {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeZr4LCEHsWOCt6epTsvnlZUFGde0coTa82g&usqp=CAU");
    text-align: center;
    padding: 1rem 3rem;
    font-size: 100%;
    background-size: cover;
    margin-top:40px;
}
        .profile{
            background-color: white;
            border: 4px solid red;
            width: 400px;
            border-radius: 40px;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        li {
            float: left;
            display: block;
        }
        .logo img{
            width: 30%;
            border: 2px solid blue;
            border-radius: 50px;
            margin-left: -70px;
            margin-top: 6px;
        }
        .username{
            text-align: center;
            font-size: 30px;
            margin-top: -40px;
            margin-left: 80px;
        }
        .username h4{
            font-size:30px;
            margin-left:-130px;
            padding-top:10px;
            margin-bottom:-9px;
           
            
        }
        h3{
            color:red;
        }
        .heading {
    margin-left: -100px;
    margin-top: 27px;
    font-size: 20px;
    color: black;
    border-radius: 20px;
    margin-bottom: 10px;
}

.table {
    background-color: rgb(0, 0, 0, 0.2);
    width: 900px;
    margin-left: 19.5%;
}

.boxcards .content-table {
    border-collapse: collapse;
    margin: 2px 0;
    font-size: 20px;
    text-align: left;
}

.content-table tr {
    border-bottom: 1px solid black;
    font-size: 22px;
    font-family: 'Prompt', sans-serif;
}

.content-table .btn {
    padding: 0.4rem 0.8rem;
    font-size: 20px;
    font-weight: 500;
    border: 1px solid black;
    background: skyblue;
    cursor: pointer;
    border-radius: 10px;
    text-decoration: none;
}
.heading h1{
    margin-top:60px;
    margin-left:-80px;
}


    </style>
</head>
<body>
    <div class="profile">
        <li><div class="logo">
            <img src="https://img.icons8.com/bubbles/2x/user.png">
        </div></li>
        <li><div class="username">
      <h4><?php echo $_SESSION['username'];?></h4>
        </div></li>
    </div>




<div class="heading">
        <h1>List of all book share with us :</h1>
    </div>
    

  

<?php

                include "db_connect.php";
             

               
                $sql="select * from sharedfile";
              
                $result = mysqli_query($conn, $sql) ;
               
                if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { 
                            if($_SESSION['username']!=$row['username'])
                            continue;
                            else {
                                 $var=$var++;
                            }
                             ?>
                               <div class="boxcards">
                                    <div class="box">
                                        <div class="content table">
                               
                                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                                              <tbody>
                                                <tr>
                                                        <td style="width: 50px;padding:30px;">
                                                        <?php echo $row['id']; ?>
                                                        </td>
                                                        <td style="width: 480px;">
                                                        <?php echo $row['username']; ?>
                                                        </td>
                                                        <td style="width: 480px;">
                                                        <?php echo $row['book name']; ?>
                                                        </td>
                                                        <td style="width: 480px;">
                                                        <?php echo $row['email id']; ?>
                                                        </td>
                                                        <td style="width: 480px;">
                                                        <?php echo $row['date'];?></td>
                                    
                    


                                                </tr>
                                                </tbody>
                                        </table>
                                    

                                    </div>
                                </div>
                        <?php } ?>

                <?php  } 
                if($var==mysqli_num_rows($result))
                echo "<h3>"."Not shared any book yet"."</h3>";?>
            
    
</body>
</html>
<?php }?>