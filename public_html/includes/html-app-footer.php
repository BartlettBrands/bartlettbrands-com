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
                <a class="map" href="https://www.google.com/maps/place/1540+Market+St+%23130,+San+Francisco,+CA+94102/@37.775068,-122.4199144,17z/data=!3m1!4b1!4m2!3m1!1s0x8085809eed02996f:0xa71be270de7aa4ea" target="_blank"><img src="assets/img/brand-map.jpg" alt="Location for Bartlett Brands Map" nopin="nopin"></a>
            </div>

            <div class="column6">

                <div id="mc_embed_signup">
                    <?php echo $emailSignup; ?>
                </div>

                <h3 class="h3 contact-header">Email Us</h3>
                <p><a href="mailto:hello@bartlettbrands.com"><?php echo $site['bb-email']; ?></a></p>
                <hr>
                <h3 class="h3 contact-header">Visit</h3>
                <p>1540 Market Street, Suite 130</br>San Francisco, California 94102</p>
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
        // However, there are legacy components, like these scripts.
        // I've opted only to remove the ones we don't use and continue with the ones that seem to work.

        // -> Retina: grabs @2x images if there are any. we don't use 'em
        // -> Smooth Scroll: nicely transitions the URL #hashtag links
        // -> Smooth Scroll .9.9: Not sure
        // -> Vegas: a nice hero image/slider management tool.
        // -> Sticky: sticks nav to top
        // -> jquery.Nav: required by Just Motion, but I'm not sure it does much with the Nav
        // -> Knob: a data UI script we don't use
        // -> Isotope: Manages animation for the Work Page
        // -> Parallax: Nice scrolling transition on bg images
        // -> YT Player: A script for YouTube videos
        // -> Just Motion: a script written by the template creators at theme forest that utilizes these earlier scripts.
    ?>

    <!--script src="assets/js/vendor/retina-1.1.0.min.js?t=<?php echo filemtime('assets/js/vendor/retina-1.1.0.min.js'); ?>"></script-->
    <script src="assets/js/vendor/smooth-scroll.min.js?t=<?php echo filemtime('assets/js/vendor/smooth-scroll.min.js'); ?>"></script>
    <!--script src="assets/js/vendor/smoothscroll-0.9.9.min.js?t=<?php echo filemtime('assets/js/vendor/smoothscroll-0.9.9.min.js'); ?>"></script-->
    <!--script src="assets/js/vendor/jquery.vegas.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.vegas.min.js'); ?>"></script-->
    <script src="assets/js/vendor/jquery.sticky.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.sticky.min.js'); ?>"></script>
    <script src="assets/js/vendor/jquery.nav.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.nav.min.js'); ?>"></script>
    <!--script src="assets/js/vendor/jquery.knob.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.knob.min.js'); ?>"></script-->
    <script src="assets/js/vendor/jquery.isotope.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.isotope.min.js'); ?>"></script>
    <script src="assets/js/vendor/jquery.parallax.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.parallax.min.js'); ?>"></script>
    <!--script src="assets/js/vendor/jquery.mb.ytplayer.min.js?t=<?php echo filemtime('assets/js/vendor/jquery.mb.ytplayer.min.js'); ?>"></script-->
    <script src="assets/js/vendor/justmotion.min.js?t=<?php echo filemtime('assets/js/vendor/justmotion.min.js'); ?>"></script>

    <!-- CUSTOM -->
    <script src="assets/js/scripts.min.js?t=<?php echo filemtime('assets/js/scripts.min.js'); ?>"></script>
</body>
</html>

<?php
// END HTML FOOTER
?>
