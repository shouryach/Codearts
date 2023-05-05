<?php
/**
 * Customize API: codearts_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage codearts
 * 
 */

/**
 * Customize Notice Control class.
 *
 * 
 *
 * @see WP_Customize_Control
 */
class codearts_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * 
	 *
	 * @var string
	 */
	public $type = 'codearts-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * 
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'codearts' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/codearts/#dark-mode-support', 'codearts' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'codearts' ); ?>
			</a></p>
		</div>
		<?php
	}
}
