<?php
/**
 * Main DOM <head> section
 *
 *
 * @author     BetterStudio
 * @package    Publisher
 * @version    1.8.4
 */
?>
	<!DOCTYPE html>
	<?php

	ob_start();
	language_attributes();
	$lang_attributes = ob_get_clean();

	?>
	<!--[if IE 8]>
	<html class="ie ie8" <?php echo $lang_attributes; ?>> <![endif]-->
	<!--[if IE 9]>
	<html class="ie ie9" <?php echo $lang_attributes; ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html <?php echo $lang_attributes; ?>> <!--<![endif]-->
	<head>
		<?php

		// GTM After <head> code
		if ( publisher_get_option( 'gtm_head' ) ) {
			echo publisher_get_option( 'gtm_head' );
		}

		?>
		<link rel="shortcut icon" href="http://www.cuautitlan.unam.mx/img/favicon_fesc.png">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <div id="fb-root"></div>
        <script async defer src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
		<?php 
		if (is_front_page()){
			$podsparams = array( 'limit' => 1,'orderby' => 'date DESC');
			$pods = pods( 'gaceta_comunidad_pdf', $podsparams ); ?>
			<meta property="og:image" content='<?php echo get_the_post_thumbnail_url( $pods->display( 'ID' ), 'full' ); ?>' />
			<meta name="twitter:image" content='<?php echo get_the_post_thumbnail_url( $pods->display( 'ID' ), 'full' ); ?>'/>
		<?php } ?>
		<?php wp_head(); ?>
	</head>

<body <?php publisher_attr( 'body' ); ?>>
<?php

// GTM After <body> code
if ( publisher_get_option( 'gtm_body' ) ) {
	echo publisher_get_option( 'gtm_body' );
}
