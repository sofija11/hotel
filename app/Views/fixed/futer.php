  <!-- Footer Starts -->
  
  <div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog">
        <div class="login-content">
            <div class="login-image">
                <img src="app/assets/images/logo-black.png" alt="image">
            </div>
            <h3>Awesome! Create a Hotux Account</h3>
            <form action="index.php?page=registerUser" method="POST">
                <div class="form-group">
                    <input type="text" name="firstname" id="fname" placeholder="Enter firstname">
                    <p id='fG'></p>
                </div>
                <div class="form-group">
                    <input type="text" name="lastname" id="lname" placeholder="Enter lastname">
                    <p id='lG'></p>
                </div>
                <div class="form-group">
                    <input type="text"  name="username" id="uname" placeholder="Enter username">
                    <p id='uG'></p>
                </div>
                <div class="form-group">
                    <input type="email"  name="email" id="mail" placeholder="Enter email address">
                    <p id='eG'>
                </div>
                <div class="form-group">
                    <input type="password"  name="password" id="pass" placeholder="Enter password">
                    <p id='pG'></p>
                </div>
                <div class="form-group">
                    <input type="password" name="confirmPassword" id="cpass" placeholder="Confirm password">
                    <p id='rPG'></p>
                </div>
                <div id="feed"></div>
                <div class="form-btn">
            <input type="button"  id="sendId" name="sendRegistration" value="Singup"/>
            
               
            </div>
           
            </form>
           
        </div>
    </div>


    </div>
  <!-- Back to top start -->
  <div id="back-to-top">
    <a href="#"></a>
</div>
<!-- Back to top ends -->
<?php

    if(isset($data["errors"])) {
        echo "<ul>";
        foreach($data["errors"] as $e) {
            echo "<li>". $e ."</li>";
        }

        echo "</ul>";
    }

?>

<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
        <div class="login-content">
            <div class="login-image">
                <img src="app/assets/images/logo-black.png" alt="image">
            </div>
            <h3> Sign into your account</h3>
            <form action="index.php?page=do-login" method="POST" >
                <div class="form-group">
                    <input type="text" name="usernameL" id="userL" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <input type="password"  name="passwordL"id="passL" placeholder="Enter password">
                </div>
                
            <div class="form-btn">
            <input type="submit" id="sendLogin"  name="sendL"  class="btn btn-primary" value="login">
           
         
               
            </div>
                
            </form>
            
           
            <ul class="social-links">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

  



  <footer class="footer-style-1">
      
        <div class="footer-top">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-about">
                                <h4>Company Info</h4>
                                <p>Our hotel is always ready for party and holiday at the same time</p>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="quick-links">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="index.php?page=home">Home</a></li>
                                    
                                    <li><a href="index.php?page=rooms">Reservations</a></li>
                                  
                                    <li><a href="index.php?page=gallery">Gallery</a></li>
                                    <li><a href="index.php?page=events">Events</a></li>
                                    <li><a href="index.php?page=contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-contact">
                                <h4>Contact info</h4>
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> 0679324567</li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> hotux@paradise.com</li>
                                    <li><i class="fa fa-location-arrow" aria-hidden="true"></i> New York</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-content text-center">
                    <p class="white">Created by <a href='https://www.linkedin.com/in/sofija-vitorovic-0b70541a1/'> Sofija Vitorovic</a></p>
                    <a href='#' >Documentation</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->
    <!-- *Scripts* -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="app/assets/js/hotel.js"></script>
   <script src="app/assets/js/jquery-3.3.1.min.js"></script>
    <script src="app/assets/js/bootstrap.min.js"></script>
   <!--   <script src="app/assets/js/plugin.js"></script> -->
    <script src="app/assets/js/main.js"></script>
    <script src="app/assets/js/custom-nav.js"></script>
    <script src="app/assets/js/custom-swiper2.js"></script>
    <script src="app/assets/js/custom-singledate.js"></script>
</body>


</html>