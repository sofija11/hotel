<section class="breadcrumb-outer">
        <div class="container">
            
        </div>
    </section>
    <!-- breadcrumb Ends -->

    <!-- reservation-main Starts -->
    <section class="content reservation-main">
        <div class="container">
            <div class="reservation-links text-center">
                <h2 class="mar-bottom-60 text-capitalize">Make Your Reservation</h2>
                
            </div>
            <div class="banner-form form-style-1">
                <div class="form-content">
                   
                    <div class="table-item">
                        <label>Guests</label>
                        <div class="form-group">
                            <select id='guests' class="niceSelect">
                                <option value='0'></option>
                                <?php for($i=1;$i<4;$i++):
                                ?>
                                <option value=<?=$i?>><?=$i?></option>
                                <?php endfor;?>
                            </select>
                        </div>
                    </div>
                  

                    <div class="table-item">
                        <div class="form-btn mar-top-35"id="aj">
                            <a class="btn btn-orange"><button name='check' id='filtriraj'>Check Availability</button></a>
                            <?php if(isset($_SESSION['user'])):	?> 	
                                <input type='hidden' id='hidnId' data-id="<?=$_SESSION['user']->idKorisnik?>" name='hidnIdKor' />
                                <?php endif?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="room-list mar-top-60" id="ajde">
                <div class="row">
                    <div class="col-md-12 pull-right">
                        <div class="list-results">
                           
                            <div class="click-menu pull-right">
                                
                            </div>
                        </div>
                        <div class="list-content">
                            <div class="list-grid" id="sobe">
                                <div class="room-grid" >
                                    <div class="grid-image">
                                        <img src="app/assets/images/room-list/grid1.jpg" alt="image">
                                    </div>
                                    <div class="grid-content">
                                        <div class="room-title">
                                            <h4>Standard Suite</h4>
                                            <p class="mar-top-5"><i class="fa fa-tag"></i> $900/Night</p>
                                            <div id='slika'></div>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                                        </div>
                                        <div class="room-services">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="grid-btn mar-top-20">
                                            <a href="index.php?page=detail" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                            <a href="index.php?page=reservation" class="btn btn-orange">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="room-grid">
                                    <div class="grid-image">
                                        <img src="app/assets/images/room-list/grid2.jpg" alt="image">
                                    </div>
                                    <div class="grid-content">
                                        <div class="room-title">
                                            <h4>Deluxe Suite</h4>
                                            <p class="mar-top-5"><i class="fa fa-tag"></i> $800/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                                        </div>
                                        
                                        <div class="room-services">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-btn mar-top-20">
                                            <a href="index.php?page=detail" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                            <a href="index.php?page=reservation" class="btn btn-orange">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-grid">
                                    <div class="grid-image">
                                        <img src="app/assets/images/room-list/grid3.jpg" alt="image">
                                    </div>
                                    <div class="grid-content">
                                        <div class="room-title">
                                            <h4>Superior Suite</h4>
                                            <p class="mar-top-5"><i class="fa fa-tag"></i> $1000/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                                        </div>
                                        
                                        <div class="room-services">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-btn mar-top-20">
                                            <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-grid">
                                    <div class="grid-image">
                                        <img src="app/assets/images/room-list/grid4.jpg" alt="image">
                                    </div>
                                    <div class="grid-content">
                                        <div class="room-title">
                                            <h4>Normal Suite</h4>
                                            <p class="mar-top-5"><i class="fa fa-tag"></i> $200/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                                        </div>
                                        
                                        <div class="room-services">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-btn mar-top-20">
                                            <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-grid">
                                    <div class="grid-image">
                                        <img src="app/assets/images/room-list/grid5.jpg" alt="image">
                                    </div>
                                    <div class="grid-content">
                                        <div class="room-title">
                                            <h4>Royal Suite</h4>
                                            <p class="mar-top-5"><i class="fa fa-tag"></i> $1200/Night</p>
                                            <div class="deal-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <div class="room-detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                                        </div>
                                        
                                        <div class="room-services">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-bed" aria-hidden="true"></i> 3 Bedrooms
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <i class="fa fa-wifi" aria-hidden="true"></i> Quick Service
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid-btn mar-top-20">
                                            <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                            <a href="#" class="btn btn-orange">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                       
                    </div>
                  <!--  <div  class="col-md-3 sidebar pull-left">
                        <div class="list-sidebar">
                            <div class="room-type list-sidebar-item" id='kat'>
                                <h4>Room Types</h4>
                               
                              
                              
                            
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15" >
                                    <input type="checkbox" />
                                    <div class="state p-warning-o" >
                                        <label>Presidentsuite Rooms</label>
                                    </div>
                                </div>
                                
                            
                            </div>
                            
                            <div class="price list-sidebar-item">
                                <h4>Price</h4>
                                <div class="range-slider" id='rangeCena'>
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                          
                            <div class="services list-sidebar-item"  id='ser'>
                                <h4>Services</h4>
                                
                                
                                
                                </div>
                            </div>
                          
                      -->  </div>
                    </div>
                </div>  
            </div>
        </div>

    </section>
    

    <!-- content starts -->
    <section class="content">
        <div class="container">
           
            <div class="booking">
                <div class="row" >
                    <div class="col-md-8" id='room_booked'>
                        <div class="booking-content" id='upisi'>
                             <!-- <div class="booking-image">
                                <img src="" alt="image">
                                <div class="booking-title">
                                    <div class="title-left">
                                        <h3>Luxury King Room</h3>
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                    <div class="title-right pull-right">
                                        <div class="title-price">
                                            <h4 class="pad-top-15"><a href="#">$1200<span>/Night</span></a></h4>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                             -->
                            
                            <div class="booking-desc mar-top-50">
            <div class="sidebar-reservation" id="reservation">
                                <h3>Your reservation</h3>
                                <div class="reservation-detail">
                                    <div class="rd-top">
                                    <input type='hidden' id=''>
                                        <div class="rd-box">
                                            <label>Check in</label>
                                            <input type='date'id='in'/>
                                        </div>
                                        <div class="rd-box">
                                            <label>Check out</label>
                                            <input type='date' id='out'/>
                                        </div>
                                    </div>
                                    <div class="rd-top">
                                        
                                    </div>
                                </div>
                                <table class="reservation-table table">
                                    <tbody>
                                        <tr>
                                            <td>Total</td>
                                            <td>$12080</td>
                                        </tr>
                                       
                                    </tbody>
                                 
                                </table>
                            </div>
           
           
        </div> 
       
                            <!-- <div class="personal-info mar-top-50">
                                <div class="form-title">
                                    <span>1</span>
                                    <h4 class="mar-bottom-30">Personal Information</h4>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="DOB">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                                            
                                            <div class="form-group">
                                                <input type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mar-0">
                                                <textarea>Message</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><br/>
                            <div class="card-btn">
                                <a href="#" class="btn btn-orange">CONFIRM BOOKING</a>
                            </div> -->
                         </div>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div> 
            </div>
        </div>
    </section>
   
    