<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blog_Likhi
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="about-us">
						<?php if ( is_active_sidebar( 'about-us' ) ) : ?>
						    <?php dynamic_sidebar( 'about-us' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="recent-post">
						<?php if ( is_active_sidebar( 'recent-post' ) ) : ?>
						    <?php dynamic_sidebar( 'recent-post' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="categories">
						<?php if ( is_active_sidebar( 'categories' ) ) : ?>
						    <?php dynamic_sidebar( 'categories' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-search">
						<?php if ( is_active_sidebar( 'search-site' ) ) : ?>
						    <?php dynamic_sidebar( 'search-site' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blog-likhi' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'blog-likhi' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'blog-likhi' ), 'blog-likhi', '<a href="http://shuvoislam.com">shuvo islam</a>' );
							?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
