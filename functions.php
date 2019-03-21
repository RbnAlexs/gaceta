<?php
/* CUSTOM CODE */

/**
 * Registro de Sidebars
**/
/*
add_action( 'register_sidebar', function( $sidebar )
{
    global $wp_registered_sidebars;

    if ( 'Primary Sidebar' !== $sidebar[ 'name' ] )
        return;

    $id = $sidebar[ 'id' ];
    $sidebar[ 'name' ] = 'Noticias - Categoría';

    $wp_registered_sidebars[ $id ] = $sidebar;
});

add_action( 'register_sidebar', function( $sidebar )
{
    global $wp_registered_sidebars;

    if ( 'Secondary Sidebar' !== $sidebar[ 'name' ] )
        return;

    $id = $sidebar[ 'id' ];
    $sidebar[ 'name' ] = 'Histórico Noticias';

    $wp_registered_sidebars[ $id ] = $sidebar;
}); 
*/

function child_theme_og_image() { 

    $mypod = pods('gaceta_comunidad_pdf');
    $params = array('limit' => 1);
    $mypod->find($params);
    while ( $mypod->fetch() ) :
        $image = get_the_post_thumbnail_url('full');
        echo '<meta property="og:image" content="'.$image.'" />';
    endwhile;
}
add_action( 'wp_head', 'child_theme_og_image' );

add_action( 'register_sidebar', function( $sidebar )
{
    global $wp_registered_sidebars;

    if ( 'Footer - Column 1' !== $sidebar[ 'name' ] )
        return;

    $id = $sidebar[ 'id' ];
    $sidebar[ 'name' ] = 'Histórico Gaceta';

    $wp_registered_sidebars[ $id ] = $sidebar;
}); 

add_action( 'register_sidebar', function( $sidebar )
{
    global $wp_registered_sidebars;

    if ( 'Footer - Column 2' !== $sidebar[ 'name' ] )
        return;

    $id = $sidebar[ 'id' ];
    $sidebar[ 'name' ] = 'Histórico Suplemento';
    $wp_registered_sidebars[ $id ] = $sidebar;
}); 

add_action( 'register_sidebar', function( $sidebar )
{
    global $wp_registered_sidebars;

    if ( 'Footer - Column 3' !== $sidebar[ 'name' ] )
        return;

    $id = $sidebar[ 'id' ];
    $sidebar[ 'name' ] = 'Histórico Video';
    $wp_registered_sidebars[ $id ] = $sidebar;
}); 


add_action( 'register_sidebar', function( $sidebar )
{
    global $wp_registered_sidebars;

    if ( 'Footer - Column 4' !== $sidebar[ 'name' ] )
        return;

    $id = $sidebar[ 'id' ];
    $sidebar[ 'name' ] = 'Página de Inicio';
    $wp_registered_sidebars[ $id ] = $sidebar;
}); 



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
