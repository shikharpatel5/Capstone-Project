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
         
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
                   $fname = $_POST['name'];
             
             echo "<h1>Thanks for your message $fname. We will get back to you on this.</h1>";
             
         }
         
         
         ?>
         
         <section class="contact">
             
        <h1 class="contact-heading">Contact Us..</h1>
             
        <form class="contact-form center" action="Contact.php" method="post">
            
          <div class="input-group">
              
            <label>First Name:- </label>
              
            <input
              type="text"
              class="contact-input"
              placeholder="Please enter your first name..."
              required: required
             name = "name"
              pattern= "[A-Za-z]+"       
            />
              
          </div>
            
          <div class="input-groups">
              
            <div class="input-group">
                
              <label>Email </label>
                
              <input
                type="email"
                class="contact-input"
                placeholder="Please enter your Email..."
                required: required     
              />
                
            </div>
              
            <div class="input-group">
                
              <label>Phone</label>
                
              <input
                type="text"
                class="contact-input"
                placeholder="Please enter your Phone number..."
                required: required
                pattern="\d{10}"     
              />
                
            </div>
              
          </div>
            
          <div class="input-group">
              
            <label>Message</label>
              
              
            <textarea
              class="form-textarea"
              placeholder="Please enter yor Message here..."
              required: required          
            ></textarea>
              
          </div>
            
          <input type="submit" value="Submit" class="form-btn" />
            
            
        </form>
             
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
