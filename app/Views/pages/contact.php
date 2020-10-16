<!-- breadcrumb Starts -->
<section class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact us 2</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us 2</li>
                    </ul>
                </nav>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="info-item mar-bottom-30">
                                <div class="info-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-content">
                                    <p>445 Mount Eden Road, Mt Eden</p>
                                    <p>Basundhara Chakrapath</p>
                                </div>
                            </div>
                            <div class="info-item info-item-or mar-bottom-30">
                                <div class="info-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <p>977-444-666-888</p>
                                    <p>977-444-222-000</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <p>info@hotux.com.np</p>
                                    <p>help@hotux.com.np</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    

                        <div id="contact-form" class="contact-form">
                            <h3>Leave us a message</h3>
                            
                            <div id="contactform-error-msg"></div>

                            <form method="POST" action="index.php?page=contactPoruka" >
                                
                                <div class="form-group"><?php if(isset($_SESSION['user'])):	?> 	
                                <input type='hidden' id='hidn' name='hidn' value="<?=$_SESSION['user']->idKorisnik?>"/>
                                <?php endif?>
                                    <input type="text" name="naslov" class="form-control" id="naslovId" placeholder="Caption">
                                </div>
                                <div class="textarea">
                                    <textarea name="comments" id="poruka" placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-right">
                                <input type="button" class="btn btn-orange" id="sendMessage" name="sendM" value="Singup"/>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   