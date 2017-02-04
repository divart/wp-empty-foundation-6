<?php
/**
 * Alert boxes
 */

//alert
function shortcode_alert(null, $content) {

	return '<div class="alert-box error-box">'.do_shortcode($content).'</div>';
}

add_shortcode('alert', 'shortcode_alert');

//approved
function shortcode_approved(null, $content) {

	return '<div class="alert-box approved-box">'.do_shortcode($content).'</div>';
}

add_shortcode('approved', 'shortcode_approved');

//attention
function shortcode_attention($args, $content) {
	extract($atts);
	return '<div class="alert-box attention-box">'.do_shortcode($content).'</div>';
}

add_shortcode('attention', 'shortcode_attention');

//notice
function shortcode_notice($args, $content) {
	extract($atts);
	return '<div class="alert-box notice-box">'.do_shortcode($content).'</div>';
}

add_shortcode('notice', 'shortcode_notice');
?>