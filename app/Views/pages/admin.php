<section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>ADMIN</h2>
                
            </div>
        </div>
    </section>
    <!-- breadcrumb Ends -->

    <!-- contact starts -->
    <section class="contact pad-top-0 contact1">
      
        <div class="container">
            <div class="contact-support">
                <div class="row">
                    
                </div>
            </div>
            <div class="contact-info">
               
            <table class="table">
                        <tr >
                            <th>RB</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Role</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        
                        <tbody >
<tr id='korisnici'>
</tr>
                        
                        </tbody>
                       
</table>
<div class='dugme'>             <div class='col-md-6' >
                                <h1><a href='#'>Insert new user</a></h1>
                                <form action="index.php?page=registerUserA" method="POST">
                <div class="form-group" >
                    <input type="text" name="firstnameA" id="fnameA" placeholder="Enter firstname">
                    <p id='fGA'></p>
                </div>
                <div class="form-group">
                    <input type="text" name="lastnameA" id="lnameA" placeholder="Enter lastname">
                    <p id='lGA'></p>
                </div>
                <div class="form-group">
                    <input type="text"  name="usernameA" id="unameA" placeholder="Enter username">
                    <p id='uGA'></p>
                </div>
                <div class="form-group">
                    <input type="email"  name="emailA" id="mailA" placeholder="Enter email address">
                    <p id='eGA'>
                </div>
                <div class="form-group">
                    <input type="password"  name="passwordA" id="passA" placeholder="Enter password">
                    <p id='pGA'></p>
                </div>
                <div class="form-group">
                    <input type="password" name="confirmPasswordA" id="cpassA" placeholder="Confirm password">
                    <p id='rPGA'></p>
                </div>
                <div id="feedA"></div>
                <div class="form-btn">
            <input type="button"  id="sendIdA" name="sendRegistrationA" value="Singup"/>
            
               
            </div>
           
            </form>
            </div>
                                <h1><a href=''>Insert new room</a></h1>

                    </div>
				</div>
                    <div class="col-md-6">
                    <form action="index.php?page=insertRoom" method="POST" enctype="multipart/form-data">
                <div class="form-group" >
                    <input type="text" name="nazivSobe" id="nazivId" placeholder="Name of room">
                   
                </div>
                <div class="form-group">
                    <input type="text" name="opis" id="opisId" placeholder="Caption">
                  
                </div>
                <div class="form-group">
                <input type="file" name="slika" id='slikaI' class="form-control"/>
                
                </div>
               
                <div class="form-group">
                    <input type="number"  name="cena" id="cenaId" placeholder="Price per night">
                   
                </div>
                <div class="form-group">
                    <input type="number" min='1' max='3' name="brojOsoba" id="osobeId" placeholder="Number of people">
                   
                </div>
                <div class="form-group">
                    <input type="number"  min='1' max='7' name="brojSoba" id="sobeId" placeholder="Number of rooms">
                   
                </div>
                <div class="form-group">
                    <input type="number" min='1' max='5' name="zvezdice" id="zvezdeId" placeholder="Number of stars"><br/>
               
                  
                <div class="form-group">
                    <select id='kategorijaa' >
                    
                    </select>
                </div>
               
                <div class="form-group">
            <input type="button"  id="posaljiSobu" name="sobaSend" value="ADD room"/>
            
               
            </div>
           
            </form>
                    </div>
                    
                </div>
            
        </div>
        <table class="table">
                        <tr >
                            <th>RB</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Role</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        
                        <tbody >
<tr id='korisnici'>
</tr>
                        
                        </tbody>
                       
</table>
        
        <div class='col-md-6' >
            <h1>kontakt poruke</h1>
<div id="poruke">

</div>
        
    </section>
    <!-- contact Ends -->

    <!-- Footer Starts -->
    