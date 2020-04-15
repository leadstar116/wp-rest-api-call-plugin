<?php // ScriptSquare - Settings Callbacks



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// callback: validate options
function scriptsquareplugin_callback_validate_options( $input ) {

	// api url
	if ( isset( $input['api_url'] ) ) {

		$input['api_url'] = esc_url( $input['api_url'] );

	}
	return $input;

}



// callback: api section
function scriptsquareplugin_callback_section_api() {

	echo '<p>These settings enable you to customize the API options.</p>';

}



// callback: text field
function scriptsquareplugin_callback_field_text( $args ) {

	$options = get_option( 'scriptsquareplugin_options', scriptsquareplugin_options_default() );

	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';

	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';

	echo '<input id="scriptsquareplugin_options_'. $id .'" name="scriptsquareplugin_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="scriptsquareplugin_options_'. $id .'">'. $label .'</label>';

}



