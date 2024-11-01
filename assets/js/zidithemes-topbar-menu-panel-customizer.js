/*   BEGIN JS */
( function( $ ) {

	wp.customize( 'zidithemes_topbar_menu_text_message_settings', function( value ) {
		value.bind( function( val ) {
			$( '.zidithemes-topbar-menu .topbanner-link .text-link' ).html( val );
		});
	});	

	wp.customize( 'zidithemes_topbar_menu_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.zidithemes-topbar-menu' ).css('background-color', val );
		});
	});

	wp.customize( 'zidithemes_topbar_menu_text_btn_bg_color_settings', function( value ) {
		value.bind( function( val ) {
			$( '.zidithemes-topbar-menu .topbanner-link .text-btn' ).css('background-color', val );
		});
	});


} )( jQuery );