<!-- header of the page -->
<header id="header">
    <!-- header area of the page -->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- contact list of the page -->
                    <ul class="contact-list list-unstyled">
                        <li><i class="icon icon_phone"></i> <a
                                href="tel:<? echo $ASSESP_DATA["tel"] ?>"><? echo $ASSESP_DATA["tel"] ?></a></li>
                        <li><i class="icon icon_mail"></i> <a
                                href="mailto:<? echo $ASSESP_DATA["email"] ?>"><? echo $ASSESP_DATA["email"] ?></a></li>
                    </ul>
                    <!-- socail network of the page -->
                    <ul class="socail-network list-unstyled">
                        <li><a href="<? echo $ASSESP_DATA["facebook"] ?>" class="social_facebook"></a></li>
                        <li><a href="<? echo $ASSESP_DATA["linkedin"] ?>" class="social_linkedin"></a></li>
                        <li><a href="<? echo $ASSESP_DATA["instagram"] ?>" class="social_instagram"></a></li>
                    </ul>
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
                        <a href="/"><img src="images/logo-assesp.png" alt="ASSESP" class="img-responsive"></a>
                          <!-- <a class="text-uppercase text-white text-logo font-bold" href="/">ASSESP</a> -->
                    </div>
                    <a href="#" class="nav-opener text-center md-round"><i class="fa fa-bars"></i></a>
                    <!-- nav of the page -->
                    <nav id="nav">
                        <ul class="list-unstyled">
                            <li
                                class="<?php echo strcmp(strtolower($_SERVER["REQUEST_URI"]), "/index.php") === 0 || strcmp(strtolower($_SERVER["REQUEST_URI"]), "/") === 0 ? "active" : "" ?>">
                                <a href="/">ACCUEIL</a>
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