<!DOCTYPE Html>
<html>

<body>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <style>
            .download {
                margin-top: 25px;
            }
            
            .download a {
                position: relative;
                display: center;
                padding: 12px 16px;
                margin: 0px 0;
                height: 20px;
                width: 180px;
                color: #fff;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 15px;
                margin-bottom: 30px;
                letter-spacing: 2px;
                border-radius: 50px;
                overflow: hidden;
                background: linear-gradient(90deg, #0162c8, #55e7fc);
            }
            
            .download a:hover {
                padding: 8px 12px;
                transition: 0.5s ease;
                margin-left: 20px;
                margin-top: 40px;
                font-size: 10px;
            }
            
            section {
                margin-bottom: 70px;
            }
            
            section a:nth-child(2) {
                letter-spacing: 2px;
                display: center;
                padding: 8px 19px;
                border-radius: 50px;
                font-weight: 400;
                margin: 0px 0;
                height: 20px;
                width: 180px;
                margin-left: 1000px;
                margin-top: 100px;
                overflow: hidden;
                background: linear-gradient(90deg, #755bea, #ff72c0);
            }
            
            section a:nth-child(2):hover {
                padding: 8px 13px;
                transition: 0.5s ease;
                font-size: 15px;
            }
        </style>
    </head>
    <nav>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
            <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
        </ul>
    </nav>
    <section>
        <div class="title1">
            <h2 class="section-title1">New Arrivals</h2>
        </div>
        <div class="swift3">
            <div class="content1 swift3">
                <div class="row">
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://kbimages1-a.akamaihd.net/b07fd048-853c-42fe-8b1d-a04a3d1de3a7/353/569/90/False/the-book-of-life-25.jpg" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">The Book Of Life</h2>
                            <p class="paragraphedit"> A Novel, By Deborah Harkness</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download="The book of life">Download</a></div>
                            <script type="text/javascript">
                                const buttons = document.querySelectorAll('a');
                                buttons.forEach(btn => {
                                    btn.addEventListener('click', function(e) {

                                        let x = e.clientX - e.target.offsetLeft;
                                        let y = e.clientY - e.target.offsetTop;

                                        let ripples = document.createElement('span');
                                        ripples.style.left = x + 'px';
                                        ripples.style.top = y + 'px';
                                        this.appendChild(ripples);

                                        setTimeout(() => {
                                            ripples.remove()
                                        }, 1000);
                                    })
                                })
                            </script>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>

                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://m.media-amazon.com/images/I/517PJt-WqTL.jpg" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">Death Comes to Call </h2>
                            <p class="paragraphedit">A Novel, by Clare Chase</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download>Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>

                    </div>

                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://images3.penguinrandomhouse.com/cover/700jpg/9781984821232" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">The Better Liar</h2>
                            <p class="paragraphedit">A Novel, By Tanen Jones</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download>Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="WhatsApp Image 2021-06-19 at 18.49.30.jpeg" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">Girls Like </br>Us</h2>
                            <p class="paragraphedit">A Novel, By Cristina Alger</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download>Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://images4.penguinrandomhouse.com/cover/700jpg/9781984818096" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">Watching From The Dark</h2>
                            <p class="paragraphedit">A Novel, By Gytha Lodge</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download>Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://kbimages1-a.akamaihd.net/78896b97-8e23-407f-9c46-ae107af88cd1/353/569/90/False/midnight-sun-44.jpg" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">Midnight Sun</h2>
                            <p class="paragraphedit">A Novel, By Stephenie meyer</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download="Midnight Sun">Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://kbimages1-a.akamaihd.net/eebb6a73-4f75-4855-aa8a-c5b8b7a0716d/353/569/90/False/the-queen-of-nothing.jpg" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">The Queen Of Nothing</h2>
                            <p class="paragraphedit">A Novel, By Holly Black</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download>Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://kbimages1-a.akamaihd.net/d865963c-c85d-43f6-9d01-5e5b6a92f2d4/353/569/90/False/finale-33.jp" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">Finale-A Caravel Novel</h2>
                            <p class="paragraphedit">A Novel, By Stephanie Garber</p>
                            <div class="download"><a href="CE_045_Experiment_2.pdf" download>Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>
                    </div>
                    <div class="column">
                        <!-- <h2>Column</h2> -->
                        <div class="column col-left">
                            <div class="img-card">
                                <img src="https://images1.penguinrandomhouse.com/cover/9780812985283" alt="">
                            </div>
                        </div>
                        <div class="column col-right">
                            <h2 class="content-title1">A Flash Of Green</h2>
                            <p class="paragraphedit">A Novel, By John D. Macdonald</p>
                            <div class="download"><a href="#" download class="download">Download</a></div>
                            <!-- <a href="seemore.html" class"btn">See More</a>                     -->
                        </div>

                    </div>
                    
                    <div class="column">

                        <?php
        include "db_connect.php";
        
        $sql = "SELECT * FROM `sharedfile`";
        $result = mysqli_query($conn, $sql) or die("Query failed");
        if(mysqli_num_rows($result) > 0){
        ?>
                            
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="column col-left">
                                <div class="img-card">
                                    <img src="<?php echo $row['image address']; ?>" alt="">
                                </div>
                            </div>
                            <div class="column col-right">
                                <h2 class="content-title1">
                                    <?php echo $row['book name']; ?>
                                </h2>
                                <p class="paragraphedit">
                                    <?php echo $row['author name']; ?>
                                </p>
                                <div class="download">
                                    <a href="<?php echo $row['pdf link']; ?>" " download class="download ">Download</a></div>
                                <!-- <a href="seemore.html " class"btn ">See More</a>                     -->
                            </div>
                            <?php } ?> 
                            <?php  } ?>
                        </div>
                           



                          



             
                    </div>
                </div>
                <a href="frontpage.php" class="button ">Back</a>
    </section>
    <section class="adjust">
        <footer>
            <div class="container1 ">
                <div class="sec aboutus ">
                    <h2>About Us</h2>
                    <p>We help you to enhance your knowledge and provide you with the best facility. We provides you the best service as per your requirement and provide us with your valuable feedback. Be connected and share...</p>
                    <ul class="sci ">
                        <li><a href="https://www.facebook.com/nisha.makwana.585559 "><i class="fab fa-facebook-f "></i></a></li>
                        <li><a href="https://www.instagram.com/nishu_mns/ "><i class="fab fa-instagram "></i></a></li>
                        <li><a href="# "><i class="fab fa-linkedin "></i></a></li>
                    </ul>
                </div>
                <div class="sec quicklinks ">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="# ">About</a></li>
                        <li><a href="# ">FAQ</a></li>
                        <li><a href="# ">Privacy Policy</a></li>
                        <li><a href="# ">help</a></li>
                        <li><a href="# ">Terms & Conditions</a></li>
                        <li><a href="# ">Contact</a></li>
                    </ul>
                </div>
                <div class="sec contact ">
                    <h2>Contact Info</h2>
                    <ul class="info ">
                        <li>
                            <span><i class="fas fa-phone "></i></span>
                            <p><a href="tel:9512246617 ">+91 9512246617</a><br>
                                <a href="tel:9624697213 ">+91 9624697213</a><br>
                                <a href="tel:6353584644 ">+91 6353584644</a><br></p>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope "></i></span>
                            <p><a href="manavshah9890@gmail.com ">manavshah9890@gmail.com</a><br>
                                <a href="nisha.makwana2423@gmail.com ">nisha.makwana2423@gmail.com</a><br>
                                <a href="jashjash144@gmail.com ">jashjash144@gmail.com</a><br>
                            </p>
                        </li>
                        <!-- <li>
                <span><i class="fas fa-envelope "></i></span>
                <span>nisha.makwana2423@gmail.com</span>
            </li>
            <li>
                <span><i class="fas fa-envelope "></i></span>
                <span>jashjash144@gmail.com</span>
            </li> -->
                        <!-- <li>
                <span><i class="fas fa-phone "></i></span>
                <p><a href="tel:9624697213 ">9624697213</a></p>
            </li>
            <li>
                <span><i class="fas fa-phone "></i></span>
                <p><a href="tel:6353584644 ">6353584644</a></p>
            </li> -->
                    </ul>
                </div>
            </div>
        </footer>
        <div class="copyrightText ">
            <p>copyright @ 2021 Book Barns. All Right Reserved.</p>
        </div>
    </section>
</body>

</html>