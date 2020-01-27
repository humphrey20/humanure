<!DOCTYPE html>
<html lang="en">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

  <title>Contact Us-Humanure Kenya</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  
    <header>


      <div class="logo">
          <img class="logopic" src="images/logo.png">
          HUMANURE KENYA
      </div>
          <nav>           

              <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>

                <li class="sub-menu"><a href="#">PROJECTS</a>
                  <ul>
                      <li><a href="projects.php">OUR IMPACT</a></li>
                      <li><a href="workshop.php">WORKSHOP</a></li>
                      <li><a href="training.php">TRAININGS</a></li>
              
                  </ul>
                </li>
                <li><a href="news.php">NEWS</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="http://humanurekenya.co.ke/cpanel">STAFF MAIL</a></li>
                <li><a href="donation-page.php">DONATE</a></li>
              </ul>
            
            
            </nav>

            <div class="menu-toggle"><i class="fa fa-align-justify" aria-hidden="true"></i></div>
    </header>

    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.menu-toggle').click(function(){
              $('nav').toggleClass('active')
          })
          $('ul li').click(function(){
              $(this).siblings().removeClass('active');
              $(this).toggleClass('active');
          })
      })
    </script>
    <br><br>

<div class="decoration"></div>

<h2>Contact Us</h2>
<p>
Our offices are Located in Nairobi.<br>

Mwalimu Hannah Building Ground floor ,Room No.2 Waiyaki way<br>

<h4>Our Addresses</h4>
Reach out to us for more information about what we do <br>

Email: <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTNqhDZQmFlvWMQvPJsRcDpTjjnRWvvZJBfwfRcjzsQVMfBCVQcVkBpvLzdXHSWwqKSSBV"> info@humanurekenya.co.ke </a> <br>

 Call: +254 712 290 449.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+254 734 424 268.</p>

<div class="container">
  <div style="text-align:center">
    <h2>Find Our Location or Text Us.</h2>
    
  </div>
  <div class="row">
    <div class="column">


              <div id="map" style="width:100%; height:420px;"></div>
                  
                  <script>
              //google map
                  function myMap() {
                  var location= {lat: -1.273190, lng: 36.743351}; 
                  var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 5,
                    center: location
                  });
                      var marker = new google.maps.Marker({
                              position: location,
                              map: map,          
                  });
                  }

                  </script>
                          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIXnvLuR-_yZkjiV1JIS2ztc-fd9reldc&callback=myMap">
                          </script>   

      
    </div>

    <div class="column">
      <form action="/action_page.php" method="">
        
        <input type="text" id="fname" name="firstname" placeholder="First Name" required>
        
        <input type="text" id="lname" name="lastname" placeholder="Last Name" required>

        <input type="text" id="email" name="email" placeholder="Enter E-mail" required>
        
        <select id="country" name="county">
          <option value="kakamega">Country</option>
          <option value="kakamega">Australia</option>
          <option value="nairobi">Kenya</option>
          <option value="kakamega">UK</option>
          <option value="kakamega">USA</option>
          

          
        </select>
        
        <textarea id="subject" name="subject" placeholder="Write Your Message" style="height:140px"></textarea>
        <input type="submit" value="Submit" style="background-color: #ff9900;">
      </form>
    </div>
  </div>
</div>

<!-- Humanure Footer -->
<footer class="page-footer font-small special-olor-dark pt-4" style="background-color: #333; color: white;">
  
  <div class="row">
      <div class="col-sm-3">
        <h5>QUICK LINKS</h5>
        <p><a href="index.php">Home</a></p>
        <p><a href="about.php">About Us</a></p>
        <p><a href="donation-page.php">Donate</a></p>
      </div>
      <div class="col-sm-3">
        <h5>ABOUT US</h5>
        <p><a href="#">Testimonies</a></p>
        <p><a href="#">Volunteers</a></p>
        <p><a href="#">Projects</a></p>
      </div>
      <div class="col-sm-3">
        <h5>OUR SITES</h5>
        <p><a href="#">Follow Us on Twitter</a></p>
        <p><a href="https://www.facebook.com/humanurekenya">Facebook Fan Page</a></p>
        <p><a href="#">info@humanurekenya.co.ke</a></p>
        
      </div>
      <div class="col-sm-3">
        <h5>REACH US AT</h5>
        <p><a href="#">Tel: +254712 290 449 /<br> +254734 424 268 </a></p>
        
      </div>
  </div>
  

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><p>© 2019 Humanure Kenya. All Rights Reserved.<br>
     Designed by Dj_daady254.</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Humanure Footer -->

</body>
</html>
