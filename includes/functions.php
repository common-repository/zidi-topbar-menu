<?php
/* 
*  Begin Functions
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function zidithemes_topbar_menu_render(){
	?>

	<div class="zidithemes-topbar-menu">
		<div class="topbanner-link">

			<a class="text-link" href="<?php echo esc_url( get_theme_mod('zidithemes_topbar_menu_text_url_settings') ); ?>">
				<?php if( get_theme_mod('zidithemes_topbar_menu_text_message_settings') ): ?>
                        <?php echo esc_html__(get_theme_mod('zidithemes_topbar_menu_text_message_settings'), 'zidi-topbar-menu'); ?>
                <?php else: ?>
                    <?php esc_html_e('Zidithemes TopBar Menu', 'zidithemes-topbar-menu'); ?>
                <?php endif; ?>		
			</a>

			<a class="text-btn" href="<?php echo esc_url( get_theme_mod('zidithemes_topbar_menu_textbtn_url_settings') ); ?>">
				<?php if( get_theme_mod('zidithemes_topbar_menu_textbtn_message_settings') ): ?>
                        <?php echo esc_html__(get_theme_mod('zidithemes_topbar_menu_textbtn_message_settings'), 'zidi-topbar-menu'); ?>
                <?php else: ?>
                    <?php esc_html_e('click', 'zidi-topbar-menu'); ?>
                <?php endif; ?>		
					
			</a>
		</div>
	</div>


	<?php
}


add_action( 'wp_body_open', 'zidithemes_topbar_menu_render');