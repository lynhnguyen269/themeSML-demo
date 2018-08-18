<?php 
// Ignore ouput topbar when it isn't enabled
$top_status = themesflat_choose_opt('topbar_enabled');
$top_content = themesflat_choose_opt('top_content');
if ( $top_status != 1 ) return;
?>
<!-- Top -->
<div class="themesflat-top">    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inside">
                    <div class="content-left text-left">
                    <?php
                        echo wp_kses_post($top_content);
                    ?>
                    </div>

                    <div class="content-right text-right">
                    <?php
                        if ( themesflat_choose_opt('enable_social_link_top') == 1 ):
                            themesflat_render_social();    
                        endif;               
                    ?>
                    </div>

                </div><!-- /.container-inside -->
            </div>
        </div>
    </div><!-- /.container -->        
</div><!-- /.top -->