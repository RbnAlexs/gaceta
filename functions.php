<?php

add_action( 'init', 'crear_post_type_cursos', 0 );
function crear_post_type_cursos() {
// Etiquetas para el Post Type
    $labels = array(
        'name'                => _x( 'Cursos', 'Post Type General Name', 'cursos-artist' ),
        'singular_name'       => _x( 'Cursos', 'Post Type Singular Name', 'cursos-artist' ),
        'menu_name'           => __( 'Cursos', 'cursos-artist' ),
        'parent_item_colon'   => __( 'cursos Padre', 'cursos-artist' ),
        'all_items'           => __( 'Todos los cursos', 'cursos-artist' ),
        'view_item'           => __( 'Ver cursos', 'cursos-artist' ),
        'add_new_item'        => __( 'Agregar Nuevo cursos', 'cursos-artist' ),
        'add_new'             => __( 'Agregar Nuevo cursos', 'cursos-artist' ),
        'edit_item'           => __( 'Editar cursos', 'cursos-artist' ),
        'update_item'         => __( 'Actualizar cursos', 'cursos-artist' ),
        'search_items'        => __( 'Buscar cursos', 'cursos-artist' ),
        'not_found'           => __( 'No encontrado', 'cursos-artist' ),
        'not_found_in_trash'  => __( 'No encontrado en la papelera', 'cursos-artist' ),
    );

// Otras opciones para el post type

    $args = array(
        'label'               => __( 'cursos', 'cursos-artist' ),
        'description'         => __( 'Próximos cursos', 'cursos-artist' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', 'revisions'),
        /* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
        * Uno sin hierarchical es como los posts
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'cursos', $args );


}




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
