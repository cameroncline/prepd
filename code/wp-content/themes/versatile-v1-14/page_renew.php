<?php /* Template Name: Renew */ ?>

<?php get_header(); ?>

	<div class="gdlr-content">
		
		<?php 

		wc_print_notices();

/**
 * My Account navigation.
 * @since 2.6.0
 */
do_action( 'woocommerce_account_navigation' ); ?>

<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>


		
	</div><!-- gdlr-content -->
<?php get_footer(); ?>