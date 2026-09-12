<!-- preloader -->
<div class="preloader">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>

<header class="header">
<!-- top header -->
<div class="header-top">
    <div class="container">
        <div class="header-top-wrapper">
            <div class="header-top-left">
                <div class="header-top-contact">
                    <ul>
                        <li>
                             <a href="mailto:<?= $this->_company['c_email'] ?>">
                                <i class="fa fa-envelope"></i><?= $this->_company['c_email'] ?></a>
                                </li>
                        <li><a href="tel:<?= $this->_company['c_tel'] ?>"><i class="fa fa-phone-volume"></i><?= $this->_company['c_tel'] ?></a>
                        </li>
                        <!--<li><a href="#"><i class="far fa-alarm-clock"></i> Sun - Fri (08AM - 10PM)</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="header-top-right">
                <div class="header-top-link">
                    <a href="/account"><i class="fa fa-arrow-right-to-bracket"></i> Login</a>
                    <!--<a href="/account"><i class="fa fa-user-vneck"></i> Register</a>-->
                </div>
                <div class="header-top-social">
                    <span>Follow Us: </span>
                    <a href="<?= $this->_company['c_facebook'] ?>"><i class="fab fa-facebook"></i></a>
                    <a href="<?= $this->_company['c_twitter'] ?>"><i class="fab fa-x-twitter"></i></a>
                    <a href="<?= $this->_company['c_instagram'] ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?= $this->_company['c_linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-navigation">
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <a class="navbar-brand" href="/">
                <img src="/public/assets/uploads/<?php echo $this->_company['c_logo'] ?>" alt="<?php echo $this->_company['c_logo'] ?>">
            </a>
            <div class="mobile-menu-right">
                <div class="search-btn">
                    <button type="button" class="nav-right-link"><i class="fa fa-search"></i></button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-mobile-icon"><i class="fa fa-bars"></i></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item "> <a class="nav-link  <?= $this->pid=='home'?'active':'' ?>" href="/" >Home</a> </li>
                    <li class="nav-item"><a class="nav-link <?= $this->pid=='about'?'active':'' ?>" href="/about-us">About</a></li>
                    <li class="nav-item"><a class="nav-link <?= $this->pid=='contact'?'active':'' ?>" href="/contact-us">Contact</a></li>
                    
                    <li class="nav-item "> <a class="nav-link <?= $this->pid=='services'?'active':'' ?>" href="/services" >Service</a>  </li>
              
                   
                </ul>
                <div class="nav-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="nav-right-btn mt-2">
                        <a href="/services" class="theme-btn"><span class="fas fa-taxi"></span>Book A Ride</a>
                    </div>
                    <div class="sidebar-btn">
                        <button type="button" class="nav-right-link"><i class="fa fa-angle-double-down farr-bars-filter"></i></button>
                    </div>
                </div>
            </div>
            <!-- search area -->
            <div class="search-area">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Type Keyword...">
                        <button type="submit" class="search-icon-btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <!-- search area end -->
        </div>
    </nav>
</div>

</header>
    <!-- header area end -->


    <!-- sidebar-popup -->
    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="fa fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="/public/assets/uploads/<?php echo $this->_company['c_logo'] ?>" alt="">
                </div>
                <div class="sidebar-about">
                    <h4>About Us</h4>
                    <p><?= substr($this->_content['aboutus']['body'], 0, 150) ?></p>
                </div>
                <div class="sidebar-contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>
                            <h6>Email</h6>
                            <a href="mailto:<?= $this->_company['c_email'] ?>">
                                <i class="far fa-envelope"></i><?= $this->_company['c_email'] ?></a>
                        </li>
                        <li>
                            <h6>Phone</h6>
                            <a href="tel:<?= $this->_company['c_tel'] ?>"><i class="fa fa-phone"></i><?= $this->_company['c_tel'] ?></a>
                        </li>
                        <li>
                            <h6>Address</h6>
                            <a href="#"><i class="fa fa-location-dot"></i><?= $this->_company['c_address'] ?></a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-social">
                    <h4>Follow Us</h4>
                    <a href="<?= $this->_company['c_facebook'] ?>"><i class="fab fa-facebook"></i></a>
                    <a href="<?= $this->_company['c_twitter'] ?>"><i class="fab fa-x-twitter"></i></a>
                    <a href="<?= $this->_company['c_instagram'] ?>"><i class="fab fa-instagram"></i></a>
                    <a href="<?= $this->_company['c_linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-popup end -->