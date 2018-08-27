<!-- Header -->
<header id="header" class="header widget-header <?php echo esc_attr(themesflat_choose_opt('header_style')) ?>" >
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrap d-flex d-flex justify-content-between align-items-center">
                        <?php get_template_part('tpl/header/brand'); ?>

                        <?php if (themesflat_choose_opt('header_searchbox') == 1) : ?>
                            <div class="show-search">
                                <a href="#"><i class="fa fa-search"></i></a>
                                <div class="submenu top-search widget_search">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php get_template_part('tpl/header/navigator'); ?>

                    </div>

                    <div class="caption-banner">
                        <?php
                        $caption_banner = themesflat_choose_opt('header-banner-caption');
                        if ($caption_banner != '') {
                            echo do_shortcode($caption_banner);
                        }
                        ?>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</header><!-- /.header -->   
