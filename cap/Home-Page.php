<!DOCTYPE html>

<html lang="en">
    
  <head>
      
    <meta charset="UTF-8" />
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
    <meta http-equiv="X-UA-Compatible"/>
    <link
      href="https://fonts.googleapis.com/css?family=Vollkorn:400,400i,600,700,900&display=swap"rel="stylesheet"
    />

    <link rel="stylesheet" href="Style/Stylesheet.css" />
    <title> KitchenerCars.ca </title>
      
  </head>
    
  <body>
      
  
      
      
     <div class="container-main">
      
      
         <div class="open-the-navbar navbars-icon center">
        <div class="a-line"></div>
        <div class="a-line"></div>
        <div class="a-line"></div>
      </div>
      <div class="navbar-wrapper">
          
          
        <nav class="navbar">
            
            
            
          <div class="close-the-navbar navbars-icon center">
              
            <div class="a-line line-1"></div>
              
              
            <div class="a-line line-2"></div>
              
          </div>
            
          <div class="navigation-list">
              
            <a href="Home-Page.php" class="navigation-link center">Home</a>
              
            <a href="Gallery.php" class="navigation-link center">Gallery</a>
              
            <a href="about.php" class="navigation-link center">About-Us</a>
              
            <a href="login.php" class="navigation-link center"> Login </a>
              
            <a href="contact.php" class="navigation-link center">Contact us</a>
              
          </div>
            
        </nav>
          
         </div>
         <?php
         
         
             session_start();
            if (isset($_SESSION['name'])) {
            echo "<h1>Welcome to your account ";
                Print_r($_SESSION['name']);
                echo "</h1>";
            }
         
         
         ?>
         
         
         <header class="header center">
             
        <div class="header-text">
            
          <h1 class="heading"> Best Car Deals in the market.</h1>
            
          <p class="header-paragraph">
              
            "Cars are the sculptures of our everyday lives"
              
          </p>
            
        </div>
             
        <img
          src="images/toppic.jpg"
             width= "600px"
             
          alt="This is our header Image of a car."
             
          class="header-image"
             
        />
        <div class="logo">
            
          <h1>
            <span class="center">K</span>
              
            <span class="center">i</span>
              
            <span class="center">t</span>
              
            <span class="center">c</span>
              
            <span class="center">h</span>
              
            <span class="center">n</span>
              
            <span class="center">e</span>
              
            <span class="center">r</span>
              
            <span class="center">c</span>
              
            <span class="center">a</span>
              
            <span class="center">r</span>
              
            <span class="center">s</span>
              
          </h1>
            
        </div>
             
      </header>
         
         
      <section class="popular-cars">
        <h1 class="popular-cars-heading">The Most Popular Cars </h1>
          
        <div class="cards-container">
            
          <div class="card">
              
            <div class="front-side">
                
              <img src="images/1.jpg" 
                alt="Ford mustang ecoboost picture"
                class="card-image"
                   Width ="600px" height="240px"/>
                
              <h1 class="car-name">  2019 Ford Mustang EcoBoost Premium </h1>
              <ul class="car-list">
                <li class="car-list-item"> Kilometers - 226km </li>
                <li class="car-list-item"> Status- New </li>
                <li class="car-list-item"> Trim - EcoBoost Premium </li>
                <li class="car-list-item"> Body Type - Convertible </li>
                <li class="car-list-item">Engine : 2.3L 4cyl</li>
              </ul>
              <button class="navigation-button">
                  
                Buy
                  
              </button>
                
            </div>
              
            <div class="flip-side center">
                
              <button class="navigation-button">
                  
                &lt;&lt;  back
              </button>
              <h3 class="car-price">$40,199</h3>
                
              <button class="card-button">Booking</button>
                
            </div>
              
          </div>
          <div class="card">
              
            <div class="front-side">
                
              <img src="images/2.jpg"  Width ="600px" height="240px" alt=" Volkswagen Golf SportWagen picture " class="card-image" />
                
              <h1 class="car-name"> Volkswagen Golf SportWagen </h1>
                
              <ul class="car-list">
                  
                 <li class="car-list-item"> Kilometers - 228km </li>
                <li class="car-list-item"> Status- New </li>
                <li class="car-list-item"> Trim - Comfortline Premium </li>
                <li class="car-list-item"> Body Type - Convertible </li>
                <li class="car-list-item">Engine : 2.3L 4cyl</li>
              </ul>
                
              <button class="navigation-button">
                  
                Buy
              </button>
                
            </div>
              
            <div class="flip-side center">
                
              <button class="navigation-button">
                  
                &lt;&lt;  back
              </button>
              <h3 class="car-price">$40,899</h3>
                
              <button class="card-button">Booking</button>
                
            </div>
              
          </div>
            
          <div class="card">
              
            <div class="front-side">
                
              <img src="images/3.jpg" Width ="600px" height="240px" alt=" 2020 GMC Sierra 1500 Elevation picture " class="card-image" />
                
              <h1 class="car-name"> 2020 GMC Sierra 1500 Elevation </h1>
              <ul class="car-list">
                <li class="car-list-item"> Kilometers - 267km </li>
                <li class="car-list-item"> Status- New </li>
                <li class="car-list-item"> Trim - Premium </li>
                <li class="car-list-item"> Body Type - Elevation </li>
                <li class="car-list-item">Engine : 2.3L 4cyl</li>
              </ul>
              <button class="navigation-button">
                  
                Buy
              </button>
                
            </div>
            <div class="flip-side center">
                
                
              <button class="navigation-button">
                  
                &lt;&lt;  back
              </button>
                
              <h3 class="car-price">$50,699</h3>
                
              <button class="card-button">Booking</button>
            </div>
          </div>
        </div>
      </section>
         
         
      <section class="story-sec">
          
        <div class="video-container">
            
          <video class="bg-video" autoplay muted loop>
              
            <source src="images/car.mp4" type="video/mp4"  width="50%"/>
              
          </video>
            
        </div>
          
        <div class="story-wrapper">
            
          <div class="story-bg">
              
            <div class="story">
                
              <img
                src="images/story1.jpg"
                   width = "600px"
                alt="Customers image"
                class="story-image"
              />
                
              <div class="story-text">
                  
                <h1 class="story-heading">
                    
                 
                    The best online Shopping experience.
                    
                </h1>
                <p class="story-paragraph">
                 I was trying to buy a car online for the past 3 months but with all the options available it was very confusing.
                    I am very glad that I found kitchenercars.ca website. They have a great collection and everything went smooth.
                </p>
              </div>
            </div>
          </div>
          <div class="story-bg">
              
            <div class="story">
                
              <img
                src="images/story2.jpg"
                   width = "600px"
                alt="Customers image"
                class="story-image"
              />
                
              <div class="story-text">
                  
                <h1 class="story-heading">
                    
                  I enjoyed this Website
                </h1>
                  
                <p class="story-paragraph">
                    
                 Using this website has been a delight, everything was easy and the customer support is superb.
                    Kudos to the owners and developers of this website.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <footer class="footer">
          
        <div class="footer-list">
            
         <a href="Home-Page.php" class="footer-link"> Home</a>
          <a href="Gallery.php" class="footer-link"> Gallery </a>
          <a href="about.php" class="footer-link"> About Us</a>
          <a href="login.php" class="footer-link"> Login </a>
          <a href="contact.php" class="footer-link"> Contact us </a>
        </div>
        <p class="footer-paragraph">
            
          Copyright &copy; Capstone Project All Rights Reserved.
        </p>
      </footer>
      
      
      
      </div>
   
        <script src="javascript/Jscript.js"></script>
  </body>
    
</html>
