<?php // ScriptSquarePlugin - Register Settings

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


// register plugin settings
function scriptsquareplugin_register_settings() {

	/*

	register_setting(
		string   $option_group,
		string   $option_name,
		callable $sanitize_callback = ''
	);

	*/

	register_setting(
		'scriptsquareplugin_options',
		'scriptsquareplugin_options',
		'scriptsquareplugin_callback_validate_options'
	);

	/*

	add_settings_section(
		string   $id,
		string   $title,
		callable $callback,
		string   $page
	);

	*/

	add_settings_section(
		'scriptsquareplugin_section_api',
		'API Settings',
		'scriptsquareplugin_callback_section_api',
		'scriptsquareplugin'
	);

	/*

	add_settings_field(
    string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'api_url',
		'API Url',
		'scriptsquareplugin_callback_field_text',
		'scriptsquareplugin',
		'scriptsquareplugin_section_api',
		[ 'id' => 'api_url', 'label' => 'API endpoint for Paramount RX' ]
	);

	add_settings_field(
		'api_key',
		'API Key',
		'scriptsquareplugin_callback_field_text',
		'scriptsquareplugin',
		'scriptsquareplugin_section_api',
		[ 'id' => 'api_key', 'label' => 'API key for Paramount RX' ]
	);

}
add_action( 'admin_init', 'scriptsquareplugin_register_settings' );
