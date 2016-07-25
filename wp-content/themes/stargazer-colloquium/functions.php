<?php


add_action( 'after_setup_theme', 'colloquium_theme_setup');

function colloquium_theme_setup() {

    /* Uses the custom color set in Stargazer within BBPress */
    add_action( 'wp_head', 'colloquium_bbpress_custom_color' ); 

}


function colloquium_bbpress_custom_color() {
        
    	$style = '';
    	$hex = get_theme_mod( 'color_primary', '' );
    	$rgb = join( ', ', hybrid_hex_to_rgb( $hex ) );
    	$style .= "li.bbp-topic-title .font-headlines a.bbp-topic-permalink:hover, a.bbp-forum-title.entry-title:hover { color: #{$hex}; } ";
    	$style .= "span.bbp-admin-links a.bbp-reply-to-link, span.bbp-admin-links a.bbp-topic-reply-link { background-color: rgba( {$rgb}, 0.8 ); } ";
    	$style .= "#bbpress-forums li.bbp-header, #bbpress-forums fieldset.bbp-form legend, span.bbp-admin-links a.bbp-reply-to-link:hover, span.bbp-admin-links a.bbp-topic-reply-link:hover { background-color: #{$hex}; }";
    	$style .= " { border-top-color: #{$hex}; } ";
    	$style = "\n" . '<style type="text/css" id="bbpress-custom-color">' . trim( $style ) . '</style>' . "\n";
    	echo $style;
}