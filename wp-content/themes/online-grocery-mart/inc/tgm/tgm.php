<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function online_grocery_mart_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'online-grocery-mart' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - Ecommerce Product Addons', 'online-grocery-mart' ),
			'slug'             => 'ibtana-ecommerce-product-addons',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Woocommerce', 'online-grocery-mart' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'online_grocery_mart_register_recommended_plugins' );