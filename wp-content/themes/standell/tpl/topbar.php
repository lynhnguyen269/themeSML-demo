<?php
// Ignore ouput topbar when it isn't enabled
$top_status = themesflat_choose_opt('topbar_enabled');
$top_content = themesflat_choose_opt('top_content');
if ($top_status != 1)
    return;
?>
<!-- Top -->
<div class="themesflat-top header-1">    
    <div class="container">
        <div class="row align-items-center">

            <div class="col-7 d-none d-md-block">

                <div class="themesflat-top_ct-info">
                    <?php echo wp_kses_post($top_content); ?>
                </div><!-- End Contact Info -->

            </div>

            <div class="col-12 col-md-5">

                <div class="themesflat-top_social">
                    <?php
                    if (themesflat_choose_opt('enable_social_link_top') == 1):
                        echo '<span class="text d-md-none d-block">Follow us:</span>';
                        themesflat_render_social();
                    endif;
                    ?>
                </div><!--  End Social -->

                <div class="themesflat-top_login-cart">
                    <?php if (themesflat_choose_opt('enable_login_cart') == 1): ?>
                        <ul id="themesflat-minicart">
                            <li class="login">
                                <a href="#">Login <i class="fas fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="#"><?php esc_html_e('Sign in', 'standell'); ?></a></li>
                                    <li class="menu-item"><a href="#"><?php esc_html_e('Register', 'standell'); ?></a></li>
                                </ul>
                            </li>
                            <li class="cart">
                                <a href="<?php echo WC()->cart->get_cart_url(); ?>" class="btn-cart">
                                    <i class="fa fa-shopping-cart"></i> <?php echo sprintf(_n('Cart (%d)', 'Cart (%d)', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?>
                                </a>
                                <div class="themesflat-minicart-bottom sub-menu">
                                    <?php
                                    if (sizeof(WC()->cart->get_cart()) > 0) :
                                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
                                            $_product = $cart_item['data'];
                                            // Only display if allowed
                                            if (!apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key) || !$_product->exists() || $cart_item['quantity'] == 0)
                                                continue;
                                            // Get price
                                            $product_price = get_option('woocommerce_tax_display_cart') == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();
                                            $product_price = apply_filters('woocommerce_cart_item_price_html', woocommerce_price($product_price), $cart_item, $cart_item_key);
                                            ?>
                                            <div class="themesflat-mini-cart-product d-flex">
                                                <div class="col-8 themesflat-mini-cart-info">
                                                    <div class="row flex-column text-right">
                                                        <a class="themesflat-mini-cart-title" href="<?php echo get_permalink($cart_item['product_id']); ?>">
                                                            <?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product); ?>
                                                        </a>
                                                        <?php echo apply_filters('woocommerce_widget_cart_item_price', '<span class="woffice-mini-cart-price">' . __('Unit Price ', 'standell') . ':' . $product_price . '</span>', $cart_item, $cart_item_key); ?>
                                                        <?php echo apply_filters('woocommerce_widget_cart_item_quantity', '<span class="themesflat-mini-cart-quantity">' . __('Quantity ', 'woffice') . ':' . $cart_item['quantity'] . '</span>', $cart_item, $cart_item_key); ?>
                                                    </div>
                                                </div>
                                                <div class="col-4 themesflat-mini-cart-thumbnail">
                                                    <?php echo $_product->get_image('img-thumbnail'); ?>
                                                </div>
                                            </div>
                                            <?php
                                        endforeach;
                                    else :
                                        ?>
                                        <p class="themesflat-mini-cart-product-empty"><?php _e('No products in the cart.', 'standell'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div><!-- End Login Cart -->

            </div>
        </div><!-- /.row -->   
    </div><!-- /.container -->
</div><!-- End Top Bar -->