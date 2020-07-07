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
         
         require('mysqli_connect.php');
         
          session_start();
            if (isset($_SESSION['name'])) {
            echo "<h1> You are already logged in as ";
                Print_r($_SESSION['name']);
                 echo " do you want to switch accounts? </h1>";
            }
         
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$username = strip_tags(mysqli_real_escape_string($dbc,$_POST['username']));
			$password = strip_tags(mysqli_real_escape_string($dbc,$_POST['password']));
			$q = "select * FROM users WHERE username = ? AND password = ? ";
			$stmt = mysqli_prepare($dbc, $q); 
		
            mysqli_stmt_bind_param($stmt, "ss" ,$username,$password);
            
            mysqli_stmt_execute($stmt);
            
            mysqli_stmt_store_result($stmt);
            
			if (mysqli_stmt_num_rows($stmt) == 1) {
                
                
                 session_start();
                 $_SESSION['name'] = $username;
                  header("Location: Home-Page.php");
			}
			else {
				echo "<h1>Incorrect account information. Please try again!</h1>";
			}
		}
         
         
         
         ?>
         
         <section class="contact">
             
        <h1 class="contact-heading"> Login </h1>
             
        <form class="contact-form center" action="login.php" method="POST">
            
          <div class="input-group">
              
            <label> Username </label>
              
            <input
              type="text"
             name = "username"       
              class="contact-input"
              required: required
              placeholder="Enter Your username"
            />
              
          </div>
            
          
            <div class="input-group">
                
              <label> Password </label>
                
              <input
                type="Password"
                name = "password"
                required: required     
                class="contact-input"
                placeholder="Enter Your password"
              />
                
            </div>
            
          
          <input type="submit" value="LOGIN" class="form-btn" />
            
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
