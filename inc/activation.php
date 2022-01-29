<?php



require_once(get_template_directory().'/inc/class-tgm-plugin-activation.php');


function tgm_plugnis(){
	$plugnis=array(
	array(
	'name'=>'Contact Form 7',
	'slug'=>'contact-form-7',
	'required'=>true,
	'force_activation'=>true,
	'force_deactivation'=>true,
	
	)
      
	
	
	);
	
  $config =array(
	
	        'name'               => 'TGM Example Plugin', // The plugin name.
			'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable' 
	
	
	);
	tgmpa($plugnis,$config);
	
	
}
add_action('tgmpa_register','tgm_plugnis');