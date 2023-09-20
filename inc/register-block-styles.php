<?php
/**
 * Block styles.
 *
 * @package weDoks
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function wedoks_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'weDoks-flat-button',
			'label' => __( 'Flat button', 'weDoks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'weDoks-navigation-button',
			'label' => __( 'Button style', 'weDoks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'weDoks-list-underline',
			'label' => __( 'Underlined list items', 'weDoks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'weDoks-box-shadow',
			'label' => __( 'Box shadow', 'weDoks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'weDoks-box-shadow',
			'label' => __( 'Box shadow', 'weDoks' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'weDoks-box-shadow',
			'label' => __( 'Box shadow', 'weDoks' ),
		)
	);
}
add_action( 'init', 'wedoks_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function wedoks_unregister_block_style() {
	wp_enqueue_script(
		'weDoks-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		WEDOKS_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wedoks_unregister_block_style' );
