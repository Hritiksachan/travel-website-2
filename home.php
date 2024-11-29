<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>
   
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/z.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
 
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour arround the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
 
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
 
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p> Amazing Tours: The Best Tour Operator and Travel Agent in India
We specialize in Tour Packages and Hotel Bookings. As India's premier tour and travel agent, we offer a variety of international and domestic tour packages at affordable prices, including:

Travel Packages
Honeymoon Packages
Tour Packages
Experience fantastic getaways with us! We ensure very good communication and a friendly, hassle-free booking process. (Although we regret that the transfer back to the airport on the final day is not included.)</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
 
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Goa Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Dubai top selling packages!</p>
            <h2>INR 10,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
            <h2>INR 9,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>pondicherry  Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>INR 11,900</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
       
      <div class="partner">
         <img src="images/mar.png" alt="">
      </div>
      <div class="partner">
         <img src="images/dd.png" alt="">
      </div>
       
      <div class="partner">
         <img src="images/ros.png" alt="">
      </div>
   </div>
</section>


<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 40% off</h3>
      <p>Bali Dynasty Resort is centrally located within walking distance to the nightlife and excitement of the Kuta area. This popular Bali accommodation offers a wide range of room types to suit families and couples. The kids can enjoy the kids club while the adults spoil themselves at Ashoka Spa or the Beach Club. For a memorable and relaxing stay in Kuta why not stay at Bali Dynasty Resort.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
 
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section   -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i>  +91-7336126787 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-8303896866  </a>
         
         <a href="#"> <i class="fas fa-envelope"></i>  rp7667131@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> kanpur , uttar pradesh , india , 208027</a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i>  www.linkedin.com/in/hritiksachan  </a>
          
         <a href="#"> <i class="fab fa-instagram"></i> travlingzone01  </a>
         <a href="#"> <i class="fab fa-twitter"></i> travlingzoneee  </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Mr. Hritik Sachan</span> | all rights reserved! </div>
</section>
 
 
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 
<script src="js/script.js"></script>
</body>
</html>