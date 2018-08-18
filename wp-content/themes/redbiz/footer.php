<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package redbiz
 */
?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- #content -->
    
    <?php 
    $call_back_bg_color     = themesflat_get_opt('call_back_bg_color');
    $text_call_back         = themesflat_get_opt('text_call_back');
    $link_button_call_out   = themesflat_get_opt('link_button_call_out');
    $text_button_call_out   = themesflat_get_opt('text_button_call_out');
    $client_bg_color        = themesflat_get_opt('client_bg_color');
    $show_logo              = themesflat_get_opt('show_logo');
    $images_clients         = themesflat_get_opt('images_clients');

    if (themesflat_choose_opt('enable_callback') == 1): ?> 
    <div class="flat-call-back" style="background-color: <?php echo esc_attr($call_back_bg_color); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                       <h6><?php echo esc_attr( $text_call_back ); ?></h6>
                    </div> 
                    <a href="<?php echo esc_url( $link_button_call_out ); ?>" class="button-contact"><?php echo esc_attr( $text_button_call_out ); ?></a>                    
                </div>           
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if (themesflat_choose_opt('enable_slide_client') == 1): ?> 
    <div class="flat-client" style="background-color: <?php echo esc_attr( $client_bg_color ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-client" data-auto="<?php if ( themesflat_choose_opt('autoplay') == 1 ) {
                        echo 'true';
                    } else {
                        echo 'false';
                    } ?>" data-item="<?php echo esc_attr( $show_logo ); ?>"
                    data-nav="<?php if ( themesflat_choose_opt('show_nav') == 1 ) {
                        echo 'true';
                    } else {
                        echo 'false';
                    } ?>"
                    data-dots="<?php if ( themesflat_choose_opt('show_dot') == 1 ) {
                        echo 'true';
                    } else {
                        echo 'false';
                    } ?>">
                        <?php echo wp_kses_post( $images_clients ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Footer -->
    
    <div class="footer_background">
        <?php if (themesflat_get_opt('show_footer') == 1): ?> 
        <footer class="footer <?php (themesflat_meta( 'footer_class' ) != "" ? esc_attr( themesflat_meta( 'footer_class' ) ):'') ;?>">      
            <div class="container">
                <div class="row"> 
                 <div class="footer-widgets">
                    <?php
                    global $themesflat_mainID;
                    $footer_controls = themesflat_decode(themesflat_choose_opt('footer_controls',$themesflat_mainID));
                    themesflat_render_box_position(".footer",$footer_controls);

                    $columns = themesflat_widget_layout(themesflat_choose_opt('footer_widget_areas',$themesflat_mainID));                    
                    $key = 0;
                    if (themesflat_choose_opt('footer_widget_areas') == 5 ) {
                        echo '<div class="col-md-12">';
                        for ( $widget_footer_columns = 0; $widget_footer_columns < 5;$widget_footer_columns++ ) {?>
                        <div class="flat-widget-footer">
                            <?php 
                                $key = $widget_footer_columns +1;
                                $widget = "footer-".$key;
                                themesflat_dynamic_sidebar($widget);
                            ?>
                        </div>
                    <?php }
                    echo '</div>';
                    } else {
                        foreach ($columns as $key => $column) {?>
                        <div class="col-md-<?php themesflat_esc_attr($column);?> col-sm-6">
                            <?php 
                                $key = $key +1;
                                $widget = themesflat_choose_opt("footer".$key,$themesflat_mainID);
                                themesflat_dynamic_sidebar($widget);
                            ?>
                        </div>
                    <?php }
                    }
                    ?>
                   
                    </div><!-- /.footer-widgets -->           
                </div><!-- /.row -->    
            </div><!-- /.container -->   
        </footer>
        <?php endif ?>
        <!-- Bottom -->
        <?php if ( themesflat_choose_opt( 'show_bottom') == 1 ) : ?>
        <div class="bottom ">
            <div class="container">           
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="copyright">                     
                            <?php echo wp_kses_post(themesflat_choose_opt( 'footer__copyright')); ?>
                        </div>
                    </div><!-- /.col-md-6 -->

                    <?php if ( themesflat_choose_opt( 'go_top') == 1 ) : ?>
                        <!-- Go Top -->
                        <a class="go-top show">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    <?php endif; ?>                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div> 
        <?php endif; ?>   
    </div> <!-- Footer Background Image -->    
</div><!-- /#boxed -->
<?php wp_footer(); ?>
</body>
</html>