
<?php 

session_start();

if(!isset($_SESSION['username'])){
	header('location:index.html');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Website BD</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLpr0
    +NBKK5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   
</head>
<body>






   <!-- Navbar Section -->
  <nav class="navbar">
   <div class="navbar__container">
     <a href="" id="navbar__logo">
         <i class="fas fa-gem"></i> TECH BD
      </a> 
     <div class="navbar__toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span> 
      <span class="bar"></span>   
     </div>
     <ul class="navbar__menu">
        <li class="navbar__item">
           <a href="home.html" class="navbar__links">Home</a> 
        </li> 
        <li class="navbar__item">
            <a href="tech.html" class="navbar__links">Tech</a> 
         </li> 
         <li class="navbar__item">
            <a href="Games.html" class="navbar__links">Games</a> 
         </li>
         <li class="navbar__btn">
            <a href="signup.php" class="button">SignUp</a> 
         </li>
         <li class="navbar__btn">
            <a href="signin.php" class="button">SignIn</a> 
         </li>
     </ul>
   </div>   
  </nav>

  <!-- Technology Section-->
  
  <div class="main">
    <div class="main__container">
       <div class="main__content">
          <h1>NEXT GENERATION</h1>
          <h2>TECHNOLOGY</h2>
          <p>See What makes us different.</p>
          <button class="main__btn"><a href="/">Get Started
         </a>
      </button> 
       </div>
       <div class="main__img--container">
          <img src="images/pic1.svg" alt="picture" id="main__img">
       </div>
    </div> 
  </div>

   <!--Services Section-->


<!-- card 1 -->

   <div class="services">
      <h1>See what the hype is about</h1>
      <div class="services__container">
        <div class="services__card">
           <h2>Experinces Bliss</h2>
           <p>AI Powered Technology</p>
          <a href="AI.html" target="_blank"> <button>Get Started</button></a>
        </div>
        <div class="services__card">
         <h2>Tractiler VR</h2>
         <p>Take the leap</p>
        <a href="VR.html" target="_blank"> <button>Get Started</button></a>
      </div>  

      <div class="services__card">
         <h2>5G</h2>
         <p>Are You Ready?</p>
        <a href="5G.html" target="_blank"> <button>Get Started</button></a>
      </div> 

      <div class="services__card">
         <h2>Robotics </h2>
         <p>Lets go!</p>
        <a href="Robotics.html" target="_blank"> <button>Get Started</button></a>
      </div> 
      </div> 
   </div>


<!-- card 2 -->

<div class="services">
      <h1>See what the hype is about</h1>
      <div class="services__container">
        <div class="services__card2">
           <h2>Internet of Behaviors(IOB)</h2>
           <p>Continue...</p>
           <a href="IOB.html" target="_blank"><button>Get Started</button></a>
        </div>
        <div class="services__card2">
         <h2>DevSecops</h2>
         <p>Take the leap</p>
       <a href="Devsecops.html" target="_blank">  <button>Get Started</button></a>
      </div>  

      <div class="services__card2">
         <h2>Intelligent Process Automation(IPA)</h2>
         <p>Ready?...</p>
        <a href="IPA.html" target="_blank"> <button>Get Started</button></a> 
      </div>

      <div class="services__card2">
         <h2>Big Data Analytics</h2>
         <p>Hurry Up!</p>
         <a href="Big Data.html" target="_blank"><button>Get Started</button></a>
      </div> 
      </div> 
   </div>



<!-- card 3 -->

<div class="services">
      <h1>See what the hype is about</h1>
      <div class="services__container">
        <div class="services__card3">
           <h2>Human Augmentation</h2>
           <p>Continue...</p>
          <a href="Human Augmentation.html" target="_blank"> <button>Get Started</button></a>
        </div>
        <div class="services__card3">
         <h2>Everything as a Service(XAAS)</h2>
         <p>Take the leap</p>
         <a href="xass.html" target="_blank"><button>Get Started</button></a>
      </div>  

      <div class="services__card3">
         <h2>Cognitive Cloud Computing</h2>
         <p>Ready?...</p>
         <a href="cognitive.html" target="_blank"><button>Get Started</button></a>
      </div> 

      <div class="services__card3">
         <h2>Distributed Ledger(DARQ)</h2>
         <p>Are you Ready!</p>
         <a href="DARQ.html" target="_blank"><button>Get Started</button></a>
      </div> 
      </div> 
   </div>






<!-- card 4 -->

<div class="services">
      <h1>See what the hype is about</h1>
      <div class="services__container">
        <div class="services__card4">
           <h2>Cyber Security</h2>
           <p>Be Careful.!</p>
          <a href="cyber.html" target="_blank"> <button>Get Started</button></a>
        </div>
        <div class="services__card4">
         <h2>Internet of Things(IOT)</h2>
         <p>Take the leap</p>
         <a href="IOT.html" target="_blank"><button>Get Started</button></a>
      </div>  
      <div class="services__card4">
         <h2>Hyper Automation</h2>
         <p>Ready?...</p>
        <a href="Hyper Automation.html" target="_blank"> <button>Get Started</button></a>
      </div> 


      <div class="services__card4">
         <h2>3D Printing</h2>
         <p>Are you Ready!</p>
         <a href="3D Printing.html" target="_blank"><button>Get Started</button></a>
      </div> 
      </div> 
   </div>



<!-- card 5 -->

<div class="services">
      <h1>Play what the hype is about</h1>
      <div class="services__container">
        <div class="services__card5">
           <h2>PUBG Mobile</h2>
           <p>Play this...</p>
           <a href="Pubg.html" target="_blank"><button>Get Started</button></a>
        </div>
        <div class="services__card5">
         <h2>Call Of Duty</h2>
         <p>play!</p>
         <a href="Call of duty.html" target="_blank"><button>Get Started</button></a>
      </div>  

      <div class="services__card5">
         <h2>Apex Legends</h2>
         <p>Ready?...</p>
         <a href="Apex legends.html" target="_blank"><button>Get Started</button></a>
      </div> 

      <div class="services__card5">
         <h2>Dauntless</h2>
         <p>Are you Ready!</p>
        <a href="Dauntless.html" target="_blank"><button>Get Started</button></a>
      </div> 
      </div> 
   </div>





   <!-- Footer Section-->

   <div class="footer__container">
      <div class="footer__links">
       <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="/">How it works</a> 
            <a href="/">Testimonals</a> 
            <a href="/">Careers</a> 
            <a href="/">Investments</a> 
            <a href="/">Terms of Services</a> 
          </div>
          
          <div class="footer__link--items">
            <h2>Contact Us</h2>
            <a href="/">Contact</a> 
            <a href="/">Support</a> 
            <a href="/">Destinations</a> 
            <a href="/">Sponsorship</a> 
          </div>
       </div>  

       <div class="footer__link--wrapper">
         <div class="footer__link--items">
           <h2>Videos</h2>
           <a href="/">Submit Video</a> 
           <a href="/">Ambassadors</a> 
           <a href="/">Agency</a> 
           <a href="/">Influencer</a> 
         </div>
         
         <div class="footer__link--items">
           <h2>Social Media</h2>
           <a href="/">Facebook</a> 
           <a href="/">Instagram</a> 
           <a href="/">Twitter</a> 
           <a href="/">Linkedin</a> 
           <a href="/">Youtube</a> 
         </div>
      </div>  
      </div>
      <div class="social__media">
         <div class="social__media--wrap">
            <div class="footer__logo">
               <a href="/" id="footer__logo"> <i class="fas fa-gem"></i>TECH BD</a>
            </div>
            <p class="website__rights">© TECH BD 2022. All rights reserved</p>
             <div class="social__icons">
              <a href="https://www.facebook.com/" class="social__icon--link" target="_blank">
               <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/" class="social__icon--link" target="_blank">
               <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/" class="social__icon--link" target="_blank">
               <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social__icon--link" target="_blank">
               <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://www.youtube.com/" class="social__icon--link" target="_blank">
               <i class="fab fa-youtube"></i>
            </a>
             </div>  
         </div>
      </div>
   </div>




   
 <script src="app.js"></script>
</body>
</html>





<!--header('location: signup.php'); -->
