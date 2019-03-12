<?php
/* CUSTOM CODE */

/**
 * Remove Rev Slider Metabox
 */
if ( is_admin() ) {

    function remove_revolution_slider_meta_boxes() {
        remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
        remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
        remove_meta_box( 'mymetabox_revslider_0', 'YOUR_CUSTOM_POST_TYPE', 'normal' );
    }

    add_action( 'do_meta_boxes', 'remove_revolution_slider_meta_boxes' );
    
}

function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

remove_action('load-update-core.php','wp_update_plugins');
add_filter('pre_site_transient_update_plugins','__return_null');

$template_directory = get_template_directory() . '/';

// Loads the loader of oculus if not included before
require $template_directory . 'includes/libs/better-framework/oculus/better-framework-oculus-loader.php';

// Includes BF loader if not included before
require $template_directory . 'includes/libs/better-framework/init.php';

// handy functions and overrides
include $template_directory . 'includes/functions.php';

// Includes core of theme
include $template_directory . 'includes/libs/bs-theme-core/init.php';

// do config
include $template_directory . 'includes/pages/global.php';
if ( is_admin() ) {
	include $template_directory . 'includes/pages/init.php';
}

// Injection Locations
include $template_directory . 'includes/injection-locations/init.php';

// Registers and prepare all stuffs about BF that is used in theme
include $template_directory . 'includes/publisher-setup.php';
new Publisher_Setup();

// Fire up Publisher search
include $template_directory . 'includes/publisher-search.php';
Publisher_Search::init();

// Fire up Publisher comments
include $template_directory . 'includes/publisher-comments.php';
Publisher_Comments::init();

// Fire up Publisher third-party plugins compatibility
include $template_directory . 'includes/publisher-plugins-compatibility.php';
Publisher_Plugins_Compatibility::init();

// Fire up Publisher
include $template_directory . 'includes/publisher.php';
new Publisher();

// Fire up Publisher admin
include $template_directory . 'includes/publisher-admin.php';
Publisher_Admin::init();

// Publisher Facebook Instant Articles configuration
if ( defined( 'IA_PLUGIN_VERSION' ) ) {
	include $template_directory . 'includes/fia/publisher-fia.php';
	Publisher_FIA::init();
}

// Publisher GDPR Compatibility
include $template_directory . 'includes/gdpr/gdpr.php';
