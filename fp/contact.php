<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Eritrean Muslim Association of Seattle: Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
     <h1>Eritrean Muslim Association of Seattle: Contact Form</h1>
     <nav class="topnav" id="myTopnav">
     <a href="index.html" >Home</a>
       <a href="about.html">About</a>
       <a href="services.html" >Services</a>
       <a href="events.html" >Events</a>
       <a href="programs.html" >Programs</a>
       <a href="donations.html" target="_blank">Donations</a>
       <a href="membership.html">Membership</a>
       <a href="contact.php" class="active">Contact EMANA</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
       <h2 class="subheader">Contact EMANA</h2>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ebtisam21@hotmail.com";  //place your/your client's email address here
        $toName = "Ebtisam Abdelkerim"; //place your client's name here
        $website = "Web 161 Contact Form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        <p class="clear-recaptcha"></p>
       
     <footer>
      <p><small>&copy; 2023 by 
          <a href="contact.php">Ebtisam Abdelkerim</a>, All Rights Reserved ~ 
          <a href="disclaimer.html">Privacy Notice</a> ~
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>