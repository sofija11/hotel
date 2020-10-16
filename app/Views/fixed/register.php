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
                
                 
                </div>
               

            <input type="button"  id="sendId" name="sendRegistration" value="Singup"/>
         
               
            </div>
           
            </form>
           
        </div>
    </div>