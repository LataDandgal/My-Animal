<?php
/*
**====================================
** Nest Ecommerce woocommerce action
**====================================
*/
global $product , $nest_theme_mod;
$product_deals_date = get_post_meta(get_the_ID() , 'product_deals_date', true);
?>
<div class="default_single_product product-detail accordion-detail  product_single_style_three single_style_four">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<div class="upper_content">
			<div class="row">
			<div class="<?php if(empty($product_deals_date)): ?> col-lg-12 <?php else: ?> col-lg-8  col-md-8 col-sm-12 <?php endif; ?>">
					<div class="titl_w">
						<?php do_action('nest_single_title'); ?>
					</div>
			
					<div class="other_content d-flex  align-items-center">
						<div class="top  d-flex align-items-center">
							<?php if(function_exists('woocommerce_show_product_sale_flash')): ?>
							<div class="sale_flash"> <?php woocommerce_show_product_sale_flash(); ?></div>
							<?php endif; ?>
							<?php do_action('nest_single_rating'); ?>
						</div>
						<div class="meta">
							<?php do_action('get_nest_woocommerce_other_product_meta'); ?>
						</div>
					</div>
				</div>
				<?php if(!empty($product_deals_date)): ?>
                <div class="col-lg-4 col-md-8 col-sm-12">
                <?php do_action('get_nest_product_deals'); ?>
                </div>
                <?php endif; ?>
			</div>
		</div>
		<?php if(!function_exists('nest_get_gallery_image_html')){
                        return;
                }
                 $post_thumbnail_id = $product->get_image_id();
            ?>
                <div class="woocommerce-product-gallery--with-images single_row_image  images">
                  
                <figure class="woocommerce-product-gallery__wrapper">
              
                <?php if($post_thumbnail_id){
                        $html = nest_get_gallery_image_html( $post_thumbnail_id, true );
                    } 
                    else {
                        $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
                        $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'steelthemes-nest' ) );
                        $html .= '</div>';
                    }
                    echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                    if(!function_exists('nest_get_gallery_image_html')){
                            return;
                    }
                    $attachment_ids = $product->get_gallery_image_ids();
                    if ( $attachment_ids && $product->get_image_id() ) {
                        foreach ( $attachment_ids as $attachment_id ) {
                            echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', nest_get_gallery_image_html( $attachment_id ), $attachment_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
                        }
                    }
                ?>
                </figure>
			
        </div>
		<div class="summary entry-summary detail-info">
			<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12">
					<div class="attr-detail attr-size mb-30">
						<div class="product_meta_same smae_meta">
							<?php do_action('nest_single_meta'); ?>
						</div>
					</div>
					<?php do_action('get_nest_woocommerce_other_product_message'); ?>
					<?php do_action('get_nest_woocommerce_other_product_add'); ?>
		
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12">
			
					<div class="clearfix product_main_content">
					<?php do_action('get_nest_woocommerce_other_product_video'); ?>
						<?php do_action('woocommerce_single_product_summary'); ?>
						<?php do_action('nest_single_sharing'); ?>
              
    
					</div>
				</div>
				
			</div>
		
		</div>
		<div class="product-info">
			<div class="tab-style3">
			<?php
                /**
                * Hook: woocommerce_after_single_product_summary.
                *
                * @hooked woocommerce_output_product_data_tabs - 10
                * @hooked woocommerce_upsell_display - 15
                * @hooked woocommerce_output_related_products - 20
            	*/
                //do_action( 'woocommerce_after_single_product_summary' );
                woocommerce_output_product_data_tabs();
                woocommerce_upsell_display();
            ?>				
			</div>
		</div>
	</div>
	<?php
	//  sticky add to cart
	$stickt_add_to_cart = isset( $nest_theme_mod['stickt_add_to_cart'] ) ? $nest_theme_mod['stickt_add_to_cart'] : '';
	if($stickt_add_to_cart == true):
	$product = wc_get_product(get_the_ID());
	do_action('nest_get_sticky_addtocart', $product); 
	endif; 
	?>
	<?php woocommerce_output_related_products(); ?>
</div>