<?php
/* 
*  Begin Customizer
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}



//ADDS CUSTOMIZER PANEL
function zidithemes_topbar_menu_panel( $wp_customize ){



	if( class_exists( 'WP_Customize_Control' ) ):	

	//CONTROLS
	Class Zidithemes_topbar_menu_pro_btn extends WP_Customize_Control{
	    public $type = 'upsell';

	    public $url = '';

	    public function render_content(){
	    ?>
	        <span class="customize-control-title alignleft">
	            <i><?php echo esc_html( $this->label ); ?></i>
	        </span>

	        <a href="<?php echo esc_url( $this->url ); ?>" class="button button-primary alignright" target="_blank"><?php esc_html_e( 'Buy Pro', 'zidi-topbar-menu' ); ?></a>
	        <?php
	    }
	}

	endif;


	//ADD PANEL
	$wp_customize->add_panel('zidithemes_topbar_menu_option_panel',
		array(
			'title'      => esc_html__('Zidi TopBar Menu', 'zidi-topbar-menu'),
			'priority'   => 2,
			'capability' => 'edit_theme_options',
		)
	);



	//BEGIN DISPLAY SECTION
	$wp_customize->add_section( 'zidithemes_topbar_menu_display_section', array(
        'title'             => esc_html__( 'Display TopBar','zidi-topbar-menu' ),
        'panel'             => 'zidithemes_topbar_menu_option_panel',
    ) );



	$wp_customize->add_setting('zidithemes_topbar_menu_display_settings', array(
	    'default' => __('none', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zidithemes_topbar_menu_display_control', array(
	    'label'    => __('Display TopBar', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_display_section',
	    'settings' => 'zidithemes_topbar_menu_display_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'zidi-topbar-menu'),
	    				'none' 	=> __('No', 'zidi-topbar-menu'),
	    			   )
	)));



	//BEGIN GENERAL SECTION
	$wp_customize->add_section( 'zidithemes_topbar_menu_general_section', array(
        'title'             => esc_html__( 'Settings','zidi-topbar-menu' ),
        'panel'             => 'zidithemes_topbar_menu_option_panel',
    ) );

    // upsell setting and control.
    $wp_customize->add_setting( 'zidithemes_topbar_menu_pro_btn', array() );

    $wp_customize->add_control( new Zidithemes_topbar_menu_pro_btn( $wp_customize, 'zidithemes_topbar_menu_pro_btn', array(
        'label'             => esc_html__( 'Get Topbar Menu Pro', 'zidi-topbar-menu' ),
        'section'           => 'zidithemes_topbar_menu_general_section',
        'url'      => 'https://zidithemes.com/',
    ) ) );

    


    //  TEXT MESSAGE
	$wp_customize->add_setting('zidithemes_topbar_menu_text_message_settings', array(
	    'default' => __('Zidi TopBar', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zidithemes_topbar_menu_text_message_control', array(
	    'label'    => __('Enter Title', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_general_section',
	    'settings' => 'zidithemes_topbar_menu_text_message_settings',
	    'type'     => 'textarea',
	)));

	    //  TEXT URL
	$wp_customize->add_setting('zidithemes_topbar_menu_text_url_settings', array(
	    'default' => __('#', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zidithemes_topbar_menu_text_url_control', array(
	    'label'    => __('Enter URL', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_general_section',
	    'settings' => 'zidithemes_topbar_menu_text_url_settings',
	    'type'     => 'url',
	)));




    //  TEXT BTN MESSAGE
	$wp_customize->add_setting('zidithemes_topbar_menu_textbtn_message_settings', array(
	    'default' => __('click', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zidithemes_topbar_menu_textbtn_message_control', array(
	    'label'    => __('Enter Button Text', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_general_section',
	    'settings' => 'zidithemes_topbar_menu_textbtn_message_settings',
	    'type'     => 'text',
	)));

	    //  TEXT BTN URL
	$wp_customize->add_setting('zidithemes_topbar_menu_textbtn_url_settings', array(
	    'default' => __('#', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'zidithemes_topbar_menu_textbtn_url_control', array(
	    'label'    => __('Enter URL', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_general_section',
	    'settings' => 'zidithemes_topbar_menu_textbtn_url_settings',
	    'type'     => 'url',
	)));




    //BEGIN DESIGN SECTION
    $wp_customize->add_section( 'zidithemes_topbar_menu_design_section', array(
        'title'             => esc_html__( 'Design','zidi-topbar-menu' ),
        'panel'             => 'zidithemes_topbar_menu_option_panel',
    ) );



    // upsell setting and control.
    $wp_customize->add_setting( 'zidithemes_topbar_menu_pro_btn_two', array() );

    $wp_customize->add_control( new Zidithemes_topbar_menu_pro_btn( $wp_customize, 'zidithemes_topbar_menu_pro_btn_two', array(
        'label'             => esc_html__( 'Get Pro', 'zidi-topbar-menu' ),
        'section'           => 'zidithemes_topbar_menu_design_section',
        'url'      => 'https://zidithemes.com/',
    ) ) );






    	//ZIDITHEMES TOPBAR BACKGROUND COLOR
	$wp_customize->add_setting('zidithemes_topbar_menu_bg_color_settings', array(
	    'default' => __('#3e3e3e', 'zidi-topbar-menu'),
	    'transport' => "refresh",
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zidithemes_topbar_menu_bg_color_control', array(
	    'label'    => __('TopBar BackGround Color', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_design_section',
	    'settings' => 'zidithemes_topbar_menu_bg_color_settings',
	)));




		   //ZIDITHEMES TOPBAR BUTTON TEXT COLOR
	$wp_customize->add_setting('zidithemes_topbar_menu_textlink_text_color_settings', array(
	    'default' => __('#fffff', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zidithemes_topbar_menu_textlink_text_color_control', array(
	    'label'    => __('TopBar Link Text Color', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_design_section',
	    'settings' => 'zidithemes_topbar_menu_textlink_text_color_settings',
	)));




    	//ZIDITHEMES TOPBAR BUTTON BACKGROUND COLOR
	$wp_customize->add_setting('zidithemes_topbar_menu_text_btn_bg_color_settings', array(
	    'default' => __('#ff0000', 'zidi-topbar-menu'),
	    'transport' => "refresh",
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zidithemes_topbar_menu_text_btn_bg_color_control', array(
	    'label'    => __('TopBar Button Background Color', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_design_section',
	    'settings' => 'zidithemes_topbar_menu_text_btn_bg_color_settings',
	)));



	   //ZIDITHEMES TOPBAR BUTTON TEXT COLOR
	$wp_customize->add_setting('zidithemes_topbar_menu_text_btn_text_color_settings', array(
	    'default' => __('#fffff', 'zidi-topbar-menu'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'zidithemes_topbar_menu_text_btn_text_color_control', array(
	    'label'    => __('TopBar Button Text Color', 'zidi-topbar-menu'),
	    'section'  => 'zidithemes_topbar_menu_design_section',
	    'settings' => 'zidithemes_topbar_menu_text_btn_text_color_settings',
	)));




}

//CSS
function zidithemes_topbar_menu_panel_custom_css(){
	?>

<style type="text/css">
.zidithemes-topbar-menu {
	display: <?php echo esc_html(get_theme_mod('zidithemes_topbar_menu_display_settings')); ?>;
	background: <?php echo esc_html(get_theme_mod('zidithemes_topbar_menu_bg_color_settings')); ?>;
}

.zidithemes-topbar-menu .topbanner-link .text-link {
	color: <?php echo esc_html(get_theme_mod('zidithemes_topbar_menu_textlink_text_color_settings')); ?>;	
}

.zidithemes-topbar-menu .topbanner-link .text-btn {
	background: <?php echo esc_html(get_theme_mod('zidithemes_topbar_menu_text_btn_bg_color_settings')); ?>;
	color: <?php echo esc_html(get_theme_mod('zidithemes_topbar_menu_text_btn_text_color_settings')); ?>;
}
</style>


	<?php

}



add_action('wp_head', 'zidithemes_topbar_menu_panel_custom_css');
add_action( 'customize_register', 'zidithemes_topbar_menu_panel' );


?>