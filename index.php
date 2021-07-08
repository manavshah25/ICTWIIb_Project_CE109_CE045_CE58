<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
    background-image: url("tempimag.png");
    position: relative;
    /* position: fixed; */
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
    background-attachment: fixed;
    overflow: hidden;
    scroll-behavior: smooth;
}

header {
    z-index: 999;
    position: fixed;
    background: rgb(120 154 196 / 50%);
    top: 0;
    left: 0;
    width: 100%;
    padding: 15px 200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.5s ease
}

header .brand {
    color: #fff;
    z-index: -1;
    font-size: 2em;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
    margin-left: -115px;
}

header .navigation {
    position: relative;
}

header .navigation a {
    color: #fff;
    z-index: -1;
    font-size: 1.4em;
    font-weight: 600;
    margin-left: 30px;
    text-decoration: wavy;
    /* margin-right: 50px; */
    /* text-align: right; */
}

header .navigation a:hover {
    color: black;
    /* border-radius: 12px;
    border: 2px groove white;
    padding: 9px;
    background-color: white; */
}

header.sticky {
    background: #414ee7;
    padding: 10px 250px;
    transition: 0.6s ease-in-out;
}

body {
    min-height: 110vh;
}

header .shif {
    margin-right: 300px;
}
    
.content {
            max-width: 800px;
            margin-top:140px;
            margin-left: 600px;
        }
        
         .content h2 {
            color: black;
            font-size: 2.4em;
            margin-left: 12px;
            font-weight: 600;
        }
        
         .content h2 span {
            font-size: 2.6em;
            font-weight: 600;
            color: black;
            text-shadow: 2px 2px 4px #fff;
        }
        
        .animated-text {
            position: relative;
            height: 50px;
            overflow: hidden;
        }
        
        .animated-text h3 {
            color: #fff;
            font-size: 2.6em;
            font-weight: 700;
            line-height: 30px;
            margin-left:3px;
           
            letter-spacing: 1px;
        }
        
        .animated-text h3:nth-child(1) {
            animation: text-move 10s infinite;
        }
        
        @keyframes text-move {
            0% {
                margin-top: 0;
            }
            25% {
                margin-top: -70px;
            }
            50% {
                margin-top: -140px;
            }
            75% {
                margin-top: -70px;
            }
            100% {
                margin-top: 0;
            }
        }
        #developer{
            display:flex;
        }
        #developer h2{
            margin-top:-10px;
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
         <div class="content">
            <h2>Welcome to
                <br><span><i>BOOK BARNS</i></span></h2>
              <div id="developer">  <h2 ><b>Developer :</b></h2>
            <div class="animated-text">
                <h3>Manav Shah</h3>
                <h3>Jash Shah</h3>
                <h3>Nisha Makwana</h3>
            </div></div>
         
           

        </div>
    
</body>
</html>