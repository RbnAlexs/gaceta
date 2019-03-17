<?php
/* CUSTOM CODE */

/**
 * Registro de Sidebars
 */
function textdomain_register_sidebars() {

    /* Register the primary sidebar. */
    register_sidebar(
        array(
            'id' => '001',
            'name' => __( 'Inicio', 'textdomain' ),
            'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div class="wpb_widgetised_column wpb_content_element">',
            'after_widget' => '</div>',
            'before_title' => '<div class="section-heading sh-t5 sh-s1"><span class="h-text">',
            'after_title' => ' </span></div>'
        )
    );

    /* Register the primary sidebar. */
    register_sidebar(
        array(
            'id' => '002',
            'name' => __( 'Historico Gacetas', 'textdomain' ),
            'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div class="wpb_widgetised_column wpb_content_element">',
            'after_widget' => '</div>',
            'before_title' => '<div class="section-heading sh-t5 sh-s1"><span class="h-text">',
            'after_title' => ' </span></div>'
        )
    );

    /* Register the primary sidebar. */
    register_sidebar(
        array(
            'id' => '003',
            'name' => __( 'Historico Suplementos', 'textdomain' ),
            'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div id="%1$s class="widget %2$s wpb_widgetised_column wpb_content_element">',
            'after_widget' => '</div>',
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );


 



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
