<?php

// OPTIONS


function zidi_topbar_menu_menupage(){
	
	add_menu_page(
					__('Zidi TopBar Menu','zidi-topbar-menu'), 
					__('Zidi TopBar Menu','zidi-topbar-menu'), 
					'manage_options', 
					'zidi-topbar-menu', 
					'zidi_topbar_menu_display',
					'dashicons-welcome-widgets-menus'
				);
	

} 

add_action('admin_menu', 'zidi_topbar_menu_menupage');






function zidi_topbar_menu_display(){
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( esc_html_e( 'You do not have sufficient permissions to access this page.', 'zidi-topbar-menu' ) );
	}
	
	?>

	<div class="wrap zidi-topbar-menu-adm">
		<h1 class="header-welcome"><?php esc_html_e('Zidi TopBar Menu - 0.0.03', 'zidi-topbar-menu'); ?></h1>
		<div class="zidi-topbar-menu-adm-dsply-fl zidi-topbar-menu-adm-fl-wrap zidi-topbar-menu-adm-jc-sp-btw">

			<div class="zidi-topbar-menu-adm-wid-49 theme-para theme-doc zidi-topbar-menu-adm-mobwid-100">
				<h4><?php esc_html_e('Plugin Documentation','zidi-topbar-menu'); ?></h4>
				<p><?php esc_html_e('Documentation for this plugin includes all plugin information that is needed to get your site up and running', 'zidi-topbar-menu'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.com/zidi-topbar-menu'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Plugin Documentation', 'zidi-topbar-menu'); ?>
					</a>
				</p>
			</div>

			<div class="zidi-topbar-menu-adm-wid-49 theme-para theme-doc zidi-topbar-menu-adm-mobwid-100">
				<h4><?php esc_html_e('Get Pro Version','zidi-topbar-menu'); ?></h4>
				<p><?php esc_html_e('Access more features', 'zidi-topbar-menu'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://zidithemes.com/zidi-topbar-menu'); ?>" class="button button-primary" target="_blank">
						<?php esc_html_e('Get Pro', 'zidi-topbar-menu'); ?>
					</a>
				</p>
			</div>


			<div class="zidi-topbar-menu-adm-wid-49 theme-para theme-doc zidi-topbar-menu-adm-mobwid-100">
				<h4><?php esc_html_e('Plugin Customizer','zidi-topbar-menu'); ?></h4>
				<p><?php esc_html_e('Click "Go To Customizer" to open the Customizer now.', 'zidi-topbar-menu'); ?></p>
				<p>
					<a href="<?php echo esc_url(admin_url('customize.php')); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Go To Customizer', 'zidi-topbar-menu'); ?>
					</a>
				</p>
			</div>


			<div class="zidi-topbar-menu-adm-wid-49 theme-para theme-doc zidi-topbar-menu-adm-mobwid-100">
				<h4><?php esc_html_e('Support','zidi-topbar-menu'); ?></h4>
				<p><?php esc_html_e('Reach out in the plugin support forums on WordPress.org', 'zidi-topbar-menu'); ?></p>
				<p>
					<a href="<?php echo esc_url('https://wordpress.org/support/plugin/zidi-topbar-menu'); ?>" class="button button-secondary" target="_blank">
						<?php esc_html_e('Support Forum', 'zidi-topbar-menu'); ?>
					</a>
				</p>
			</div>





			
			<div class="theme-upgrade zidi-topbar-menu-adm-wid-100">
				<table class="zidi-topbar-menu-adm-wid-100">
					<thead class="theme-table-head">
						<tr>
							<th class="feature"><h3><?php esc_html_e('Features', 'zidi-topbar-menu'); ?></h3></th>
							<th class="zidi-topbar-menu-adm-wid-33"><h3><?php esc_html_e('Free', 'zidi-topbar-menu'); ?></h3></th>
							<th class="zidi-topbar-menu-adm-wid-33"><h3><?php esc_html_e('Pro', 'zidi-topbar-menu'); ?></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="feature-items-title">
								<h3><?php esc_html_e('Plugin Price', 'zidi-topbar-menu'); ?></h3>
							</td>
							<td class="free-btn"><?php esc_html_e('Free', 'zidi-topbar-menu'); ?></td>
							<td>
								<a class="pro-link-btn" href="<?php echo esc_url('https://zidithemes.com/zidi-topbar-menu-pro/'); ?>" target="_blank">
									<?php esc_html_e('$13/year', 'zidi-topbar-menu'); ?>
								</a>
							</td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Enable Option', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Button Option', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Text Option', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Background Color', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Text Color', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Padding', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Multiple Buttons', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Dismiss Option', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Topbar Bottom Border', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Button Borders', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Button Border Radius', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Hide Button', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Button BG hover Color', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Text Hover Color', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Text Align Option', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Left Button Option', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Font Size', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Font Weight', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class="feature-items-title"><h3><?php esc_html_e('Button Padding', 'zidi-topbar-menu'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td class=""></td>
							<td class=""></td>
							<td class="go-pro">
								<span class="">
									<a class="link" href="<?php echo esc_url('https://zidithemes.com/zidi-topbar-menu-pro/'); ?>" target="_blank">
										<?php esc_html_e('View Pro', 'zidi-topbar-menu'); ?>
									</a>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>





		</div>

	</div>


	<?php
}



?>