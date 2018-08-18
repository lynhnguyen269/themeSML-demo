<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('twentyseventeen-panel '); ?> >

    <?php
    if (has_post_thumbnail()) :
        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'twentyseventeen-featured-image');

        // Calculate aspect ratio: h / w * 100%.
        $ratio = $thumbnail[2] / $thumbnail[1] * 100;
        ?>

        <div class="panel-image" style="background-image: url(<?php echo esc_url($thumbnail[0]); ?>);">
            <div class="panel-image-prop" style="padding-top: <?php echo esc_attr($ratio); ?>%"></div>
        </div><!-- .panel-image -->

    <?php endif; ?>

    <div class="panel-content">
        <div class="wrap">
            <header class="entry-header">
                <?php the_title('<h2 class="entry-title">', '</h2>'); ?>

                <?php twentyseventeen_edit_link(get_the_ID()); ?>

            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php
                /* translators: %s: Name of current post */
                the_content(sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'), get_the_title()
                ));
                ?>
            </div><!-- .entry-content -->

            <!-- demo custom range price -->
            <div class="form-slider-range">
                <form method="post" action="/action_page_post.php">
                    <div data-role="rangeslider">
                        <label for="price-min">Price:</label>
                        <input type="range" name="price-min" id="price-min" value="<?php echo get_theme_mod('option3', 0); ?>" min="0" max="1000" />
                        <label for="price-max">Price:</label>
                        <input type="range" name="price-max" id="price-max" value="<?php echo get_theme_mod('option4', 0); ?>" min="0" max="1000" />
                    </div>
                    <input type="submit" data-inline="true" value="Submit">
                    <p>The range slider can be useful for allowing users to select a specific price range when browsing products.</p>
                </form>
            </div>

            <!-- demo custom field gallery -->
            <?php
            $images = get_post_meta(189, 'vdw_gallery_id', true);
            if (!empty($images)) :
                ?>
                <h3>Gallery</h3>
                <p><?php echo get_post_meta(189, 'date_gallery_port_type', true); ?></p>
                <ul>
                    <?php
                    foreach ($images as $image) :
                        $image_obj = get_post($image);
                        ?>
                        <li>
                            <?php
//                            echo '<pre>';
//                            var_dump($image_obj);
//                            echo '</pre>';
                            echo wp_get_attachment_image($image_obj->ID, 'medium')
                            ?>
                        </li>
                    <?php endforeach;
                    ?>
                </ul>
            <?php endif;
            ?>

        </div><!--.wrap -->



    </div><!--.panel-content -->

</article><!--#post-## -->
