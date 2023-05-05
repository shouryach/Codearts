<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage codearts
 * 
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * 
	 *
	 * @return void
	 */
	function codearts_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'codearts-columns-overlap',
				'label' => esc_html__( 'Overlap', 'codearts' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'codearts-border',
				'label' => esc_html__( 'Borders', 'codearts' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'codearts-border',
				'label' => esc_html__( 'Borders', 'codearts' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'codearts-border',
				'label' => esc_html__( 'Borders', 'codearts' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'codearts-image-frame',
				'label' => esc_html__( 'Frame', 'codearts' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'codearts-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'codearts' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'codearts-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'codearts' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'codearts-border',
				'label' => esc_html__( 'Borders', 'codearts' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'codearts-separator-thick',
				'label' => esc_html__( 'Thick', 'codearts' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'codearts-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'codearts' ),
			)
		);
	}
	add_action( 'init', 'codearts_register_block_styles' );
}
