<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
 
  
   
?>

<!DOCTYPE Html>
<html>
<body>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style2.css">
        <!-- <link rel="stylesheet" href="style5.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    </head>
  <!-- <section>
    <div class="scroll-up-btn">
      <i class="fas fa-angle-up"></i>
  </div>
  <nav class="navbar">
      <div class="max-width">
          
          <ul class="menu">
              <li><a href="#home" class="menu-btn20">Home</a></li>
              <li><a href="#academics" class="menu-btn20">Academics</a></li>
              <li><a href="#skills" class="menu-btn20">Skills</a></li>
              <li><a href="#hobbies" class="menu-btn20">Hobbies</a></li>
              <li><a href="#contact" class="menu-btn20">Contact</a></li>
          </ul>
          <div class="menu-btn20">
              <i class="fas fa-bars"></i>
          </div>
      </div>
  </nav>
  <script>
      
      $('.menu-btn20').click(function() {
          $('.navbar .menu').toggleClass("active");
          $('.menu-btn20 i').toggleClass("active");
      });
  </script>
  </section> -->
    <!-- <section class="header">
        <div class="navigation">
          <div class="header">
            <div class="logo">
              <img src="logo.jpg" height="50px" width="50px">
            </div>
          <div class="menu-btn20">
            <i class="fas fa-bars"></i>
          </div>
          <div class="side-bar20">
            <div class="close-btn20">
              <i class="fas fa-times"></i>
            </div>
            <div class="menu20">
              <div class="item20"><a href="#swift1"><i class="fas fa-desktop"></i>Dashboard</a></div>
              <div class="item20">
                <a class="sub-btn"><i class="fas fa-table"></i>Tables<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                  <a href="#" class="sub-item20">Sub Item 01</a>
                  <a href="#" class="sub-item20">Sub Item 02</a>
                  <a href="#" class="sub-item20">Sub Item 03</a>
                </div>
              </div>
              <div class="item20"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
              <div class="item20">
                <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                  <a href="#" class="sub-item20">Sub Item 01</a>
                  <a href="#" class="sub-item20">Sub Item 02</a>
                </div>
              </div>
              <div class="item20"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
            </div>
          </div>
        </div>
        
          <script type="text/javascript">
            $(document).ready(function(){
              //jquery for toggle sub menus
              $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
              });
         
              //jquery for expand and collapse the sidebar
              $('.menu-btn20').click(function(){
                $('.side-bar20').addClass('act');
                $('.menu-btn20').css("visibility", "hidden");
              });
         
              $('.close-btn20').click(function(){
                $('.side-bar20').removeClass('act');
                $('.menu-btn20').css("visibility", "visiblity");
              });
            });
            </script>
    </section>  -->
    <header>
    <nav>
      <label class="logo"><img src="logo.jpg" height="40px" width="40px">
        Book Barns</label>
      
      <ul>
         <li><a style="text-decoration:none;" class="active" href="#swift1">Home</a></li>
         <li>
            <a style="text-decoration:none;"href="#">Profile
            <i class="fas fa-caret-down"></i>
            </a>
            <ul style="list-style-type:none;">
               <li><a style="text-decoration:none;" href="profile1.php"> <?php echo $_SESSION['username'];?></a></li>
               <li><a style="text-decoration:none;" href="sharing.php">Share Book</a></li>
               <li><a style="text-decoration:none;" href="logout.php">Logout</a></li>
            </ul>
         </li>
         <li>
            <a style="text-decoration:none;" href="#">Books
            <i class="fas fa-caret-down"></i>
            </a>
            <ul style="list-style-type:none;">
               <li><a style="text-decoration:none;" href="#newarrivals">New Arrivals</a></li>
               <li><a style="text-decoration:none;"href="#shortstories">Short Stories</a></li>
               <li>
                  <a style="text-decoration:none;" href="#novel">NOVEL
                  <!-- <i class="fas fa-caret-right"></i> -->
                  </a>
                  <!-- <ul>
                     <li><a href="#">Links</a></li>
                     <li><a href="#">Works</a></li>
                     <li><a href="#">Status</a></li>
                  </ul> -->
               </li>
               <li><a style="text-decoration:none;"href="#selfhelp">Self Help</a></li>
               <li><a style="text-decoration:none;" href="#childrenbook">Children Book</a></li>
            </ul>
         </li>
         <li><a style="text-decoration:none;"href="#ourteam">About Us</a></li>
         <li><a style="text-decoration:none;" href="feedback.php">Feedback</a></li>
      </ul>
   </nav>
   </header>
    <section class="swift1" id="swift1">
    <div class="slideshow-container">
     
        <div class="mySlides fade">
          <img class="image" src="coverpage1.jpg">
          <div class="text1">Welcome.... </br><?php echo $_SESSION['username'];?></div>
        </div>
        
        <div class="mySlides fadee">
          <img class="image" src="coverpage2.webp">
          <div class="text2">Book gives you the</br> wings of imagination</div>
        </div>
        
        <div class="mySlides fade">
          <img class="image" src="coverpage3.jpg">
          <div class="text3">A book is a </br>dream that you</br> hold in your hand</div>
        </div>
        <div class="mySlides fade">
            <img class="image" src="coverpage4.jpg">
            <div class="text4">Between the pages</br> of book is a </br>wonderful place to be</div>
          </div>
        
        </div>
        <br>
        
        <div style="text-align:center" class="swift2">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
      </section>
    <section class="newarrivals" id="newarrivals">
      <div class="title1">
        <div class="borderup"></br></br></br></br>
          <img src="border.png">
        </div>
        <h2 class="section-title1">New Arrivals</h2>
    </div>
    <div class="swift3">
    <div class="content1 swift3">
      <div class="row">
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card1">
                <img src="https://kbimages1-a.akamaihd.net/b07fd048-853c-42fe-8b1d-a04a3d1de3a7/353/569/90/False/the-book-of-life-25.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">The Book Of Life</h2>
          <p class="paragraphedit"> A Novel, By Deborah Harkness</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card2">
                <img src="https://m.media-amazon.com/images/I/517PJt-WqTL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Death Comes to Call </h2>
          <p class="paragraphedit">A Novel, by Clare Chase</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
  
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card3">
                <img src="https://images3.penguinrandomhouse.com/cover/700jpg/9781984821232" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">The Better Liar</h2>
          <p class="paragraphedit">A Novel, By Tanen Jones</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card4">
                <img src="WhatsApp Image 2021-06-19 at 18.49.30.jpeg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Girls Like </br>Us</h2>
          <p class="paragraphedit">A Novel, By Cristina Alger</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div><div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card5">
                <img src="https://images4.penguinrandomhouse.com/cover/700jpg/9781984818096" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Watching From The Dark</h2>
          <p class="paragraphedit">A Novel, By Gytha Lodge</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
      </div>
     </div>
    </div>
    <div class="button1"><a href="seemore1.php" class="button">See More</a></div></br>
    <script type="text/javascript">
      const buttons = document.querySelectorAll('a');
      buttons.forEach(btn => {
          btn.addEventListener('click',function(e){
  
              let x = e.clientX - e.target.offsetLeft;
              let y = e.clientY - e.target.offsetTop;
  
              let ripples = document.createElement('span');
              ripples.style.left = x + 'px';
              ripples.style.top = y + 'px';
              this.appendChild(ripples);
  
              setTimeout(() => {
                  ripples.remove()
              },1000);
          })
      })
      </script>
    <div class="borderdown"></br></br></br></br>
      <img src="border1.png">
    </div>
    </section></br></br></br></br>
    <section id="shortstories">
      <div class="title3">
        <div class="borderup"></br></br></br></br></br>
          <img src="border.png">
        </div>
        <h2 class="section-title3">Short Story</h2>
    </div>
    <div class="swift5">
    <div class="content3">
      <div class="row">
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card11">
                <img src="https://ia801906.us.archive.org/BookReader/BookReaderPreview.php?id=managainsthimsel00menn&subPrefix=managainsthimsel00menn&itemPath=/14/items/managainsthimsel00menn&server=ia801906.us.archive.org&page=leaf1&fail=preview&&scale=8&rotate=0" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">Man against Himself</h2>
          <p class="paragraphedit"> A Novel, by Karl Mennigar</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card12">
                <img src="https://rathertoofondofbooks.files.wordpress.com/2019/08/someone-we-should-know-cover-.jpg?w=329&h=506" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">Someone We Know</h2>
          <p class="paragraphedit">A Novel, by Shari Lapena</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
  
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card13">
                <img src="https://m.media-amazon.com/images/I/51V+Bc7FTaL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">The Fairy Tale</h2>
          <p class="paragraphedit">A Novel, By F.D.Lee</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card14">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51E3toj2JkL._SX311_BO1,204,203,200_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">Summer at willow tree</h2>
          <p class="paragraphedit">A Novel, By Heidi Rice</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div><div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card15">
                <img src="https://images-na.ssl-images-amazon.com/images/I/91OtR086mFL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">Grimms' Fairy Tale</h2>
          <p class="paragraphedit">A Novel, By Jacob&Wilhelmm Grimm</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
      </div>
     </div>
    </div>
    <div class="button1"><a href="seemore3.html" class="button">See More</a></div>
    <div class="borderdown"></br></br></br></br></br>
      <img src="border1.png">
    </div>
    </section></br></br></br></br>
    <section id="novel">
      <div class="title2">
        <div class="borderup"></br></br></br></br></br>
          <img src="border.png">
        </div>
        <h2 class="section-title2">NOVEL</h2>
    </div>
    <div class="swift4">
    <div class="content2">
      <div class="row">
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card6">
                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1559178370l/46043229._SY475_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title2">The Secret Girl</h2>
          <p class="paragraphedit"> A Novel, by  C.M. Stunich</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card7">
                <img src="https://m.media-amazon.com/images/I/51w4WZmNCEL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Malevolent</h2>
          <p class="paragraphedit">A Novel, by K.M.Carrol</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
  
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card8">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51dguHQGVcL._SX309_BO1,204,203,200_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Once an Eagle</h2>
          <p class="paragraphedit">A Novel, By Anton Myrer</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card9">
                <img src="https://upload.wikimedia.org/wikipedia/en/9/98/Shadow_and_Bone_%282012%29-Leigh_Bardugo.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Shadow and the bone</h2>
          <p class="paragraphedit">A Novel, By Leigh Bardugo</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div><div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card10">
                <img src="https://m.media-amazon.com/images/I/51lIBq3BhpL._SL500_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Broken Legacy</h2>
          <p class="paragraphedit">A Novel, By Eve Jaymin</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
      </div>
     </div>
    </div>
    <div class="button1"><a href="seemore2.html" class="button">See More</a></div>
    <div class="borderdown"></br></br></br></br>
      <img src="border1.png">
    </div>
    </section></br></br></br></br>
    <section id="selfhelp">
      <div class="title4">
        <div class="borderup"></br></br></br></br></br>
          <img src="border.png">
        </div>
        <h2 class="section-title4">Self-Help</h2>
    </div>
    <div class="swift6">
    <div class="content4">
      <div class="row">
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card16">
                <img src="https://images-na.ssl-images-amazon.com/images/I/71UypkUjStL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title2">Think and Grow Rich</h2>
          <p class="paragraphedit"> A Novel, by  Napoleon Hill</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card17">
                <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1328847328l/4963801.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Top of the world</h2>
          <p class="paragraphedit">A Novel, by Peter May</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
  
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card18">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61xPDmYV7SL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Learning How to Fly</h2>
          <p class="paragraphedit">A Novel, By A.P.J Abdul Kalam</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card19">
                <img src="https://m.media-amazon.com/images/I/41hWU-zMglL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">How to be fine</h2>
          <p class="paragraphedit">A Novel, By Jolenta Greenberg</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div><div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card20">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51UKFWWvqHL._SY291_BO1,204,203,200_QL40_ML2_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">The power of habit</h2>
          <p class="paragraphedit">A Novel, By Charles Duhigg</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
      </div>
     </div>
    </div>
    <div class="button1"><a href="seemore4.html" class="button">See More</a></div>
    <div class="borderdown"></br></br></br></br>
      <img src="border1.png">
    </div>
    </section></br></br></br></br>
    <section id="childrenbook">
      <div class="title5"> 
        <div class="borderup"></br></br></br></br></br>
        <img src="border.png">
      </div>
        <h2 class="section-title5">Children Books</h2>
    </div>
    <div class="swift7">
    <div class="content5">
      <div class="row">
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card21">
                <img src="https://m.media-amazon.com/images/I/51srK6oou0L.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">Little Men</h2>
          <p class="paragraphedit"> A Novel, by Louisa May Alcott</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card22">
                <img src="https://images-na.ssl-images-amazon.com/images/I/81+uVQd9YvL.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">The Arabian Nights</h2>
          <p class="paragraphedit">A Novel, by Malcolm C. Lyons</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
  
        </div>
        
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card23">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51X+umahRpL._SX358_BO1,204,203,200_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">The Plane Below</h2>
          <p class="paragraphedit">A Novel, By Wizard of coast team</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div>
        <div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card24">
                <img src="https://i.pinimg.com/474x/79/26/f2/7926f24746cd76389e592a16a9e2d50d.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title3">The Explorer</h2>
          <p class="paragraphedit">A Novel, By Jacqueline Wilson</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
        </div><div class="column">
          <!-- <h2>Column</h2> -->
          <div class="column col-left">
            <div class="img-card25">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61+3z1o4oUL._SX334_BO1,204,203,200_.jpg" alt="">
            </div>
        </div>
        <div class="column col-right">
          <h2 class="content-title1">Charlotte's Web</h2>
          <p class="paragraphedit">A Novel, By Garth Williams</p>
          <!-- <a href="seemore.html" class"btn">See More</a>                     -->
      </div>
      </div>
     </div>
    </div>
    <div class="button1"><a href="seemore5.html" class="button">See More</a></div>
    <div class="borderdown"></br></br></br></br>
      <img src="border1.png">
    </div>
    </section></br></br></br></br></br></br></br></br>
    <!-- <section id="ourteam">
      <div class="team-section">
        <h2>Our Team</h2>
        <span><div class="border"></div></span>
        <div class="ps">
          <a href="#p1"><img src="WhatsApp Image 2021-07-03 at 23.54.05.jpeg" alt=""></a>
          <a href="#p2"><img src="WhatsApp Image 2021-07-04 at 00.05.34.jpeg" alt=""></a>
          <a href="#p3"><img src="WhatsApp Image 2021-07-04 at 00.17.08.jpeg" alt=""></a>
        </div>
       
        <div class="sect" id="p1" >
         
          <span><div class="border">
            <span> 
              <p class="pedit1"><span class="name">Jash</span>I am </br>
              <a href="https://www.facebook.com/profile.php?id=100011107877314"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.linkedin.com/in/jash-shah-59781a204/"><i class="fab fa-linkedin"></i></a>
              <a href="https://www.instagram.com/jashshah_31/"><i class="fab fa-instagram"></i></a>
            </p></span>
          </div></span>
        </div>
        <div class="sect" id="p2">
         
          <span><div class="border">
            <p class="pedit2"> <span class="name">Nisha</span>I'm a web-devloper and programmer.</br>I'm hard-worker and quick-lerner.</br>
              <a href="https://www.facebook.com/nisha.makwana.585559"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.linkedin.com/in/nisha-makwana-b4a903209/"><i class="fab fa-linkedin"></i></a>
              <a href="https://www.instagram.com/nishu_mns/"><i class="fab fa-instagram"></i></a>
            </p>
          </div></span>
        </div>
        <div class="sect" id="p3">
         
          <span><div class="border">
            <p class="pedit3"> <span class="name">Manav</span>hdfsf hff</br>fhsf</br>
              <a href="https://www.facebook.com/profile.php?id=100069156744305"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.linkedin.com/in/manav-shah-28a521212"><i class="fab fa-linkedin"></i></a>
              <a href="https://www.instagram.com/manavshah.25/"><i class="fab fa-instagram"></i></a>
            </p>
          </div></span>
        </div>
      </div>
    </section> -->
    <section id="ourteam">
      <footer>
      <div class="container1">
        <div class="sec aboutus">
            <h2>About Us</h2>
            <p>We help you to enhance your knowledge and provide you with the best facility.
                We provides you the best service as per your requirement and provide us with your valuable feedback.
                Be connected and share...</p>
            <ul class="logo" style: "list-style-type:none;">
              <h4>Get site on other device</h4>
              <li><a href="#"><img src="https://static7.lottiefiles.com/images/v3/footer/app_apple.svg"></a>
              <a herf="#"><img src="https://static2.lottiefiles.com/images/v3/footer/app_desktop.svg"></a>
            <a href="#"><img src="https://static8.lottiefiles.com/images/v3/footer/app_android.svg"></a></li>
            </ul>
            <ul class="sci">
              <h4>Get Connected:</br></h4>
                <li><a href="#"><i class="fab fa-facebook-f "></i></a></li>
                <li><a href="https://instagram.com/bookbarns2021?utm_medium=copy_link"><i class="fab fa-instagram "></i></a></li>
                <li><a href="# "><i class="fab fa-linkedin "></i></a></li>
            </ul>
        </div>
        <div class="sec quicklinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">help</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contact Info</h2>
            <ul class="info">
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p><a href="tel:9512246617">+91 9512246617</a><br>
                    <a href="tel:9624697213">+91 9624697213</a><br>
                    <a href="tel:6353584644">+91 6353584644</a><br></p>
                </li>
                <li>
                    <span><i class="fas fa-envelope "></i></span>
                    <p><a href="mailto:manavshah9890@gmail.com?bcc=bookbarns2021@gmail.com&subject=My%20Feedback&body=Respect%20BOOK%20BARNS%20Officals" target="_top">manavshah9890@gmail.com</a><br>
                   <a href="mailto:nisha.makwana2423@gmail.com?bcc=bookbarns2021@gmail.com&subject=My%20Feedback&body=Respect%20BOOK%20BARNS%20Officals" target="_top">nisha.makwana2423@gmail.com</a><br>
                   <a href="mailto:jashjash144@gmail.com?bcc=bookbarns2021@gmail.com&subject=My%20Feedback&body=Respect%20BOOK%20BARNS%20Officals" target="_top">jashjash144@gmail.com</a><br>
                    
                    </p>
                </li>
                <!-- <li>
                    <span><i class="fas fa-envelope "></i></span>
                    <span>nisha.makwana2423@gmail.com</span>
                </li>
                <li>
                    <span><i class="fas fa-envelope"></i></span>
                    <span>jashjash144@gmail.com</span>
                </li> -->
                <!-- <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p><a href="tel:9624697213">9624697213</a></p>
                </li>
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p><a href="tel:6353584644">6353584644</a></p>
                </li> -->
            </ul>
        </div>
    </div>
</footer>
<div class="copyrightText">
    <P> User visited :- <?php echo $_SESSION['usercount']; ?></p>
    <p>copyright @ 2021 Book Barns.All Right Reserved.</p>
 
</div>
    </section>
</body>   
</html>
<?php

    }
    else {
      ?>
      <div class="session">
      <h style="text-align:center;">your session has been expired so login again for enjoying serivice</h><br>
      <a href="login.php">login again</a>
      </div>
      <?php
     
  }
   ?>

