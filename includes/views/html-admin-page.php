<?php
/**
 * Admin options screen.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$reviews_url = 'https://wordpress.org/support/view/plugin-reviews/woocommerce-pagseguro?filter=5#postform';

?>

<h3><?php echo $this->method_title; ?></h3>

<?php echo $this->method_description; ?>

<?php if ( apply_filters( 'woocommerce_pagseguro_help_message', true ) ) : ?>
	<div class="updated woocommerce-message">
		<p><?php printf( __( 'Help us keep the %s plugin free making a %s or rate %s on %s. Thank you in advance!', 'woocommerce-pagseguro' ), '<strong>' . __( 'WooCommerce PagSeguro', 'woocommerce-pagseguro' ) . '</strong>', '<a href="http://claudiosmweb.com/doacoes/">' . __( 'donation', 'woocommerce-pagseguro' ) . '</a>', '<a href="' . esc_url( $reviews_url ) . '" target="_blank">&#9733;&#9733;&#9733;&#9733;&#9733;</a>', '<a href="' . esc_url( $reviews_url ) . '" target="_blank">' . __( 'WordPress.org', 'woocommerce-pagseguro' ) . '</a>' ); ?></p>
	</div>
<?php endif; ?>

<table class="form-table">
	<?php $this->generate_settings_html(); ?>
</table>
