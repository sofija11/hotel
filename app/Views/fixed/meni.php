 <!-- Navigation Bar -->
  <?php
 //var_dump($_SESSION);
 ?> 
 <div class="header_menu affix-top">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php?page=home">
                            <img alt="Image" src="app/assets/images/logo.png" class="logo-white">
                            <img alt="Image" src="app/assets/images/logo-black.png" class="logo-black">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li class="dropdown submenu active">
                                <a href="index.php?page=home"  role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            </li>
                            <?php
                                if(isset($_SESSION['user'])):
                                
                                ?>
                            <li class="dropdown submenu active">
                                <a href="index.php?page=rooms"  role="button" aria-haspopup="true" aria-expanded="false">Reservation</a>
                            </li>
                            <?php endif;?>
                            <li class="dropdown submenu active">
                                <a href="index.php?page=gallery"  role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                            </li>
                            <li class="dropdown submenu active">
                                <a href="index.php?page=events"  role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                            </li>
                            <?php
                                if(isset($_SESSION['user'])):
                                
                                ?>
                            <li class="dropdown submenu active">
                                <a href="index.php?page=contact"  role="button" aria-haspopup="true" aria-expanded="false">Contact us</a>
                                </li><?php endif;?>
                                <?php
                                if(isset($_SESSION['user'])&&($_SESSION['uloga']==1)):
                                
                                ?>
                            <li class="dropdown submenu active">
                                <a href="index.php?page=admin"  role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                            </li><?php endif;?>
                            <?php
                                if(isset($_SESSION['user'])):
                                
                                ?>
                                 <li class="dropdown submenu active">
                                <a href="index.php?page=logout"  role="button" aria-haspopup="true" aria-expanded="false">Log out</a>
                            </li>
                                <?php
                                    endif;
                                ?>
                        
                            <!-- <li class="submenu dropdown">
                                <a href="roomlist-2.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms<i class="fa fa-angle-down" aria-hidden="true"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="roomlist-2.html">Room List</a></li>
                                    <li><a href="roomlist-1.html">Room Grid</a></li>
                                    <li><a href="detail-full.html">Room Detail</a></li>
                                    <li><a href="detail-sidebar.html">Room Detail Sidebar</a></li>
                                    <li><a href="availability.html">Check Availability</a></li>
                                    <li><a href="room-select.html">Select Room</a></li>
                                    <li><a href="booking.html">Booking Page</a></li>
                                    <li><a href="confirmation.html">Confirmation Page</a></li>
                                </ul>
                            </li> -->
                        
                           
                          
                            
                        </ul>
                        <?php
                                if(isset($_SESSION['user'])):
                                
                                ?>
                        <div class="nav-btn">
                            <a href="index.php?page=rooms" class="btn btn-orange">Book Now</a>
                        </div><?php endif?>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="slicknav-mobile"></div>
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
        </header>