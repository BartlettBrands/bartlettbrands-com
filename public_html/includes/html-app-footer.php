<?php
// BEGIN APP FOOTER
// @has: html closing scripts + tags
// @requires: functions.php, html-app-header.php
?>



<?php
 // THE PAGE CONTENT WAS INSERTED HERE ?>

    <section class="contact" id="contact">
        <div class="container12">

            <h2 class="h2 section-title">Got a lemon? We&#8217;ll Make a Margarita.</h2>
            <p class="common-center section-subtitle">Contact Us</p>

            <div class="column6">
                <a class="map" href="https://www.google.com/maps/place/977+Valencia+St,+San+Francisco,+CA+94110/@37.7573387,-122.4231243,17z/data=!3m1!4b1!4m5!3m4!1s0x808f7e3e82029dab:0x18a23a2f8eeb0be9!8m2!3d37.7573387!4d-122.4209356" target="_blank"><img src="assets/img/brand-map.jpg" alt="Location for Bartlett Brands Map" nopin="nopin"></a>
            </div>

            <div class="column6">

                <div id="mc_embed_signup">
                    <?php echo $emailSignup; ?>
                </div>

                <h3 class="h3 contact-header">Email Us</h3>
                <p><a href="mailto:hello@bartlettbrands.com"><?php echo $site['bb-email']; ?></a></p>
                <hr>
                <h3 class="h3 contact-header">Visit</h3>
                <p>977 Valencia Street</br>San Francisco, California 94110</p>
                <hr>
                <h3 class="h3 contact-header">Follow Us</h3>
                <div class="social-icons">
                    <a href="<?php echo $site['bb-facebook'];  ?>" target="_blank" title="Facebook"><?php  echo $svg_icon_facebook;  ?></a>
                    <a href="<?php echo $site['bb-pinterest']; ?>" target="_blank" title="Pinterest"><?php echo $svg_icon_pinterest; ?></a>
                    <a href="<?php echo $site['bb-behance'];   ?>" target="_blank" title="Behance"><?php   echo $svg_icon_behance;   ?></a>
                    <a href="<?php echo $site['bb-patter'];    ?>" target="_blank" title="Patter"><?php    echo $svg_icon_patter;    ?></a>
                    <a href="<?php echo $site['bb-linkedin'];  ?>" target="_blank" title="LinkedIn"><?php  echo $svg_icon_linkedin;  ?></a>
                    <a href="<?php echo $site['bb-snapchat'];  ?>" target="_blank" title="Snapchat"><?php  echo $svg_icon_snapchat;  ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container12">
            <div class="column12">
                <small>&copy; 2014 Rebecca Bartlett LLC. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <div id="modal-email" class="modal">
        <div class="modal__bg"></div>
        <div class="modal__body">
            <a class="close-button" href="#">&times;</a>
            <h3 class="h3 modal__header">Sign Up For Our Newsletter</h3>
            <p>Get studio updates, snappy strategies from our blog and pictures of pretty things we&nbsp;made.</p>
            <div id="mc_embed_signup_modal">
                <?php echo $emailSignup; ?>
            </div>
        </div>
    </div>

    <?php
        // The initial developer used a template from http://themeforest.net/item/justmotion-one-page-html-template/6806656
        // This has since been utterly reworked and no longer tries to use that theme's design or structure.
        // I've opted only to remove the ones we don't use and continue with the ones that seem to work.
        // These are notes on the ones I've kept

        // -> Smooth Scroll: nicely transitions the URL #hashtag links
        // -> Sticky: sticks nav to top
        // -> jquery.Nav: required by Just Motion, but I'm not sure it does much with the Nav
        // -> Isotope: Manages animation for the Work Page
        // -> Parallax: Nice scrolling transition on bg images
        // -> Just Motion: a script written by the template creators at theme forest that utilizes these earlier scripts.
    ?>

    <script src="assets/js/vendor/smooth-scroll.min.js?t=<?php echo filemtime('assets/js/vendor/smooth-scroll.min.js'); ?>"></script>
    <script src="assets/js/vendor/jquery.sticky.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.sticky.min.js'); ?>"></script>
    <script src="assets/js/vendor/jquery.nav.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.nav.min.js'); ?>"></script>
    <script src="assets/js/vendor/jquery.isotope.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.isotope.min.js'); ?>"></script>
    <script src="assets/js/vendor/jquery.parallax.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.parallax.min.js'); ?>"></script>
    <script src="assets/js/vendor/justmotion.min.js?t=<?php echo filemtime('assets/js/vendor/justmotion.min.js'); ?>"></script>

    <!-- CUSTOM -->
    <script src="assets/js/scripts.min.js?t=<?php echo filemtime('assets/js/scripts.min.js'); ?>"></script>
</body>
</html>

<?php
// END HTML FOOTER
?>
