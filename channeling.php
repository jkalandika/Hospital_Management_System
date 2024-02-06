<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Cart</title>
    <!-- link to css-->
    <link rel="stylesheet" href="home%20style.css">
    <!-- java script-->
    <script src="channeling.js"></script>      
    <!--Box icon -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    
</head>    
<body>
    <header><br>
        <div class="nav container">
            <a href="index.php"class="logo"><i class='bx bx-home-smile bx-burst' ></i>+Smile <br> Hospital.lk</a>
            
                            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' ></i></label>
    <ul class="navbar">
      <li><a href="index.php" >Home</a></li>
        <li><a href="about.html">About Us </a></li>
        <li><a href="channeling.html">channeling</a></li>
        <li><a href="appointment.php">Add Cart <i class='bx bxs-cart-add bx-tada' style='color:#078876'  ></i></a></li>
        <li><a href="channeling.php"class="active">Cart</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="facilities.html">Facilities</a></li>
        <li><a href="user.php">User Account</a></li>
        
    </ul>
  
            <!--add pay-->
        <li><a href="payment.php" class="btn_p"><i class='bx bx-credit-card'></i></a></li> 
            
            <!--location-->
        <li><a href="location.html" class="btn_p"><i class='bx bx-location-plus'></i></a></li> 
         
        </div>
         
    </header><br>
    <div class="pc_img">
              <img src="img/lk.jpg.png" alt="" class="pc_img">
            </div>
    
    <!--channeling-->
    <section class="Properties container" id="channeling">
      <div class="heading">
           <span>Recent</span>
          <h2> Our Featured Propertise</h2>
          <p> Get Your Own Like It...</p>
    </div>
             <div class="carousel_channeling">
      <div class="carousel_inner_channeling">
         <div class="carousel_item_channeling carousel_item__active_channeling">
            <img src="img/Dark-living-room-scheme.jpg" alt="" class="carousel_img_channeling">
            <div class="carousel_caption_channeling">
               <h1 class="carousel_title_channeling">Make an appointment through our<br>Channeling service...<i class='bx bx-home-heart'></i></h1>
            </div>
         </div>
          <div class="carousel_item_channeling carousel_item__active_channeling">
            <img src="img/Low-level-sofa.jpg"alt="" class="carousel_img_channeling">
            <div class="carousel_caption_channeling">
               <h1 class="carousel_title_channeling_1">Come and Join us Enjoy <br> much as You Like...</h1>
            </div>
         </div>
         
            
      </div><br><br>



      <div class="Properties-container container">

      <?php
$db = mysqli_connect("localhost", "root", "", "hospital_management_system");

$result = mysqli_query($db, "SELECT * FROM appointment");
while ($row = mysqli_fetch_array($result)) {
  echo "<div class='box'>";
      echo "<img src='img/".$row['image']."' >";
      
   
    echo "<div class='content'>";
    echo "<div class='text'>";
        echo "<h3>".$row['pname']."</h3>";
        echo "<h3>".$row['dname']."</h3>";
        echo "<p>".$row['Aday']."</p>";
        echo "</div>";
        echo "</div>";
  echo "</div>";
}
?> 
      
    
        </div>
    </div>
        
</section>
    
    
    
<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2><br><br>+Smile Hospital.lk<br><h10>Our Hospital, Your Healing Sanctuary.<br> Compassionate care awaits.</h10></h2>
        <div class="footer-box">
            <h3><br><br>Quick links</h3>
            <a href="#"><i class='bx bx-home-smile' ></i> Home</a>
            <a href="channeling.html"><i class='bx bx-channeling-house' ></i> Channeling</a>
            <a href="#">Rates <i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star-half' ></i></a>
        </div>
        <div class="footer-box">
            <h3><br><br>Locations</h3>
            <a href="#"><i class='bx bx-location-plus' ></i> Colombo</a>
          
        </div>
        <div class="footer-box">
            <h3><br><br>Contacts</h3>
            <a href="#"><i class='bx bx-phone-call' ></i>  +94 312 234 476</a>
            <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=CllgCJfrLfwMrDLmwnPbrFlthmVCwdxMblVGvLnnHwMgfMQkBtmsRndqqmGXtNHwCZJWFhHRrcL"><i class='bx bx-envelope' ></i> smilehospital.lk@gmail.com</a>
            <div class="social">
            <a href="https://www.facebook.com"><i class='bx bxl-facebook'></i></a>
            <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>
            <a href="https://www.instagram.com/accounts/login/"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bx-qr'></i></a> 
            </div>
        </div>
    </div>  
</section>

<!--copyright-->
<div class="copyright">
        <p>&#169; Simle Hospital.lk All Right Reserved 2022</p>
    
    </div>
    
    </body>
</html>