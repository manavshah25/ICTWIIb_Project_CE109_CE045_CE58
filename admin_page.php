
<?php
session_start();
if(isset($_SESSION['adminuser']) && isset($_SESSION['adminpass']))
{
 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/c628238ccd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style8.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>Admin Page</title>
</head>

<body>
    <header>
        <h1>Welcome Admin,</h1>
    </header>
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h1>List of all the registered users </h1>
                </div>
                <div class="TABLE">
                    <?php
                    include "db_connect.php";
                    $sql = "SELECT * FROM `info of signup`";
                    $result = mysqli_query($conn, $sql) or die("Query failed");
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="700px" height="auto">
                            <thead style="color: black;">
                                <tr>
                                    <th style="font-size: 20px;">USER_ID</th>
                                    <th style="font-size: 20px;">USERNAME</th>
                                    <th style="font-size: 20px;">PASSWORD</th>
                                    <th style="font-size: 20px;">EMAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td class="id"><?php echo $row['serial no.']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['email id']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="heading">
        <h1>List of all book share with us</h1>
    </div>
    <?php

    include "db_connect.php";

    $sql = "SELECT * FROM `sharedfile`";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    if (mysqli_num_rows($result) > 0) {
    ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="boxcards">
                <div class="box">
                    <div class="content table">

                        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
                            <tbody>
                                <tr>
                                    <td style="width: 30px;"><?php echo $row['id']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['username']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['book name']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['email id']; ?></td>
                                    <td style="width: 480px;"><?php echo $row['date'];?></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php  } ?>
    </div>

    <div class="queries">
        <div class="heading">
            <h1> FeedBack recived</h1>
        </div>
        <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">
            <tr>
            <td style="width: 30px;">USER_ID:</th>
                <td style="width: 70px;">USER:</td>
                <td style="width: 300px;">EMAIL:</td>
                <td style="width: 150px;">REVIEWS:</td>
                <td>RATING:</td>
            </tr>
        </table>
         <?php

        include "db_connect.php";

        $sql = "SELECT * FROM `feedback`";
        $result = mysqli_query($conn, $sql) or die("Query failed");
        if (mysqli_num_rows($result) > 0) {
        ?>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="content table">
                    <table class="content-table" style="margin-left:auto;margin-right:auto;margin-top:10px;" width="900px" height="auto">

                        <tr>
                        <td style="width: 30px;"><?php echo $row['serial no.']; ?></td>
                            <td style="width: 70px;">
                                <?php echo $row['username']; ?>
                            </td>
                            <td style="width: 300px;">
                                <?php echo $row['email id']; ?>
                            </td>
                            <td style="width: 150px;">
                                <?php echo $row['text']; ?>
                            </td>
                            <td><?php echo $row['rate']; ?>
                            </td>
                        </tr>
                    </table>
                </div>

            <?php } ?>
        <?php  } ?>
    </div> </br></br>
    <a  class="log" href="logout.php">LOGOUT</A>
    <marquee>Thank you for visit!!</marquee>
</body>

</html>
<?php

    }
    else {
      ?>
      <div class="session">
      <h style="text-align:center;">your session has been expired so login again for enjoying serivice </h><br>
      <a href="adminlogin.php">login again</a>
      </div>
      <?php
     
  }
   ?>