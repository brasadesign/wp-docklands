<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @version 3.0.0
 */

get_header();
?>

	<div id="primary" class="col-sm-12">
		<div id="content" class="site-content home" role="main">

			<?php get_sidebar( 'left' ); ?>

			<div class="col-sm-9 right">

				<h2 class="bg-title"><?php _e('Storages','odin'); ?></h2>

				<?php
				/**
				* woocommerce_before_main_content hook
				*
				* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the conten)
				* @hooked woocommerce_breadcrumb - 20
				*/
				do_action( 'woocommerce_before_main_content' );?>
				<?php while ( have_posts() ) : the_post(); ?>
				    <?php wc_get_template_part( 'content', 'single-product' ); ?>
			    <?php endwhile; // end of the loop. ?>
                <?php
                /**
                * woocommerce_after_main_content hook
                *
                * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                */
                do_action( 'woocommerce_after_main_content' );
                ?>

				<h3 class="bg-title">New Arrivals</h3>

				<div class="col-sm-12 arrivals">
					<?php
					// WP_Query arguments
					$args = array (
						'post_type'              => 'product',
						'posts_per_page'         => '3',
					);
					// The Query
					$query = new WP_Query( $args );
					?>
					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ): $query->the_post(); ?>
							<?php get_template_part('content','produto'); ?>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</div><!-- arrivals -->

				<div class="col-md-12 full">
					<?php get_template_part( 'parts/recentrly-items' ); ?>
				</div><!-- full -->

			</div><!-- right -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
