<!-- header of the page -->
<header id="header" class="style2">
    <!-- header area of the page -->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="contact-list list-unstyled">
                        <li><i class="icon fa fa-clock-o"></i> Nous sommes ouverts 24/7</li>
                    </ul>
                    <!-- <ul class="sign-up list-unstyled">
                        <li><a href="#popup1" class="lightbox">log in</a></li>
                        <li>|</li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- header holder of the page -->
    <div class="header-holder">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- logo of the page -->
                    <div class="logo">
                        <!-- <a href="/"><img src="images/logo-f.png" alt="ASSESP" class="img-responsive"></a> -->
                         <a class="text-uppercase text-white text-logo font-fold" href="/">ASSESP</a>
                    </div>
                    <a href="#" class="nav-opener text-center md-round"><i class="fa fa-bars"></i></a>
                    <!-- nav of the page -->
                    <nav id="nav">
                        <ul class="list-unstyled">
                            <li class="<?php echo strcmp(strtolower($_SERVER["REQUEST_URI"]), "/index.php") === 0 || strcmp(strtolower($_SERVER["REQUEST_URI"]), "/") === 0 ? "active" : "" ?>">
                                <a href="index.php">ACCUEIL</a>
                            </li>
                            <li
                                class="<?php  echo strcmp(strtolower($_SERVER["REQUEST_URI"]), "/about.php") == 0 ? "active" : "" ?>">
                                <a href="about.php">À PROPOS</a>
                            </li>
                            <li
                                class="<?php  echo strcmp(strtolower($_SERVER["REQUEST_URI"]), "/events.php") == 0 ? "active" : "" ?>">
                                <a href="events.php">ÉVÈNEMENTS</a>
                            </li>
                            <li
                                class="<?php  echo strcmp(strtolower($_SERVER["REQUEST_URI"]), "/gallery.php") == 0 ? "active" : "" ?>">
                                <a href="gallery.php">GALLERIE</a>
                            </li>
                            <li
                                class="<?php  echo strcmp(strtolower($_SERVER["REQUEST_URI"]), "/contact.php") == 0 ? "active" : "" ?>">
                                <a href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>