<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header start -->
    <header class="main_header_area">
        <div class="header-content">
            <div class="container">
                <div class="links links-left">
                    <ul>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> vitorovicsofija610@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0679324567</a></li>
                        
                    </ul>
                </div>
                <div class="links links-right pull-right">
                    <ul><?php if(!isset($_SESSION['user'])):
                    ?>
                        <li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-pen" aria-hidden="true"></i> Register</a></li>
                    <li><?php endif;?>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/sofija-vitorovic-0b70541a1/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>