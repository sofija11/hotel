
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

  