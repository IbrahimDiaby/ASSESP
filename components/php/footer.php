<!-- footer of the page -->
<footer id="footer">
    <!-- footer holder of the page -->
    <div class="footer-holder">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">A propos de nous</h3>
                    <p>L'Association des Étudiants Sénégalais de Provence.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">Contact</h3>
                    <!-- contact list of the page -->
                    <ul class="list-unstyled contact-list">
                        <li>
                            <span class="icon ti-location-pin"></span>
                            <address><? echo $ASSESP_DATA["location"] ?></address>
                        </li>
                        <li>
                            <span class="icon ti-email"></span>
                            <a href="mailto:<? echo $ASSESP_DATA["email"] ?>"><? echo $ASSESP_DATA["email"] ?></a>
                        </li>
                        <li>
                            <span class="icon ti-headphone-alt"></span>
                            <a href="tel:<? echo $ASSESP_DATA["tel"] ?>"><? echo $ASSESP_DATA["tel"] ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h3 class="text-uppercase">Newsletters</h3>
                    <p>Souscrivez à notre newsletters pour recevoir les nouveautés par email.</p>
                    <!-- subscribe form of the page -->
                    <form action="#" class="subscribe-form">
                        <fieldset>
                            <input type="email" class="form-control" placeholder="Entrez votre email ici ...">
                            <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area of the page -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Copyrights © 2025 Tous droits reservés.</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <!-- Socail network of the page -->
                    <ul class="socail-network list-unstyled">
                        <li><a href="<? echo $ASSESP_DATA["facebook"] ?>" class="social_facebook"></a></li>
                        <li><a href="<? echo $ASSESP_DATA["linkedin"] ?>" class="social_linkedin"></a></li>
                        <li><a href="<? echo $ASSESP_DATA["instagram"] ?>" class="social_instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>