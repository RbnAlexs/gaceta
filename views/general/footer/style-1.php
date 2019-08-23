<?php
/**
 * style-1.php
 *
 * Footer style 1 template file
 *
 * @author    BetterStudio
 * @package   Publisher
 * @version   3.0.0
 */

// Before Footer Ad
publisher_show_ad_location( 'footer_before',
	array(
		'container-class' => 'adloc-before-footer',
		'before'          => '<div class="container adcontainer">',
		'after'           => '</div>',
	) );

$date     = date( 'Y' );
$name     = get_bloginfo( 'name' );
$home_url = get_home_url();

// Prepare copyright Text
$copy_text_1 = str_replace(
	array(
		'%%year%%',
		'%%date%%',
		'%%title%%',
		'%%sitename%%',
		'%%siteurl%%',
	),
	array(
		$date,
		$date,
		$name,
		$name,
		$home_url
	),
	do_shortcode( publisher_get_option( 'footer_copy1' ) )
);

$copy_text_2 = str_replace(
	array(
		'%%year%%',
		'%%date%%',
		'%%title%%',
		'%%sitename%%',
		'%%siteurl%%',
	),
	array(
		$date,
		$date,
		$name,
		$name,
		$home_url
	),
	do_shortcode( publisher_get_option( 'footer_copy2' ) )
);

// Footer Instagram
if ( publisher_get_option( 'footer_social_feed' ) != 'hide' && publisher_get_option( 'footer_instagram' ) != '' ) {
	// Location: "views/footer/_social-feed.php"
	publisher_get_view( 'footer', 'instagram-' . publisher_get_option( 'footer_social_feed' ) );
}

?>
<!--FOOTER START-->
<footer class="footer">
  <div class="container">
    <div class="row">     
      <!-- COLUMNA CAMPUS-->       
      <div class="col-lg-3 col-sm-3 address wow fadeInUp">
        <h1>CAMPUS</h1>
        <address>
          <p> 
            <a href="http://www.cuautitlan.unam.mx/ubicacion.html" class="p-head">Campo Uno</a>: Av. 1o de Mayo S/N, Santa Mar&iacute;a las Torres, Campo Uno, 54740 Cuautitl&aacute;n Izcalli, Edo. de M&eacute;x.<br>
            <a href="http://www.cuautitlan.unam.mx/ubicacion.html" class="p-head">Campo Cuatro</a>: Carr. Cuautitl&aacute;n-Teoloyucan Km. 2.5, San Sebastian Xhala, 54714 Cuautitl&aacute;n Izcalli, Edo. de M&eacute;x.<br>
            <a href="http://www.cuautitlan.unam.mx/ubicacion.html" class="p-head">Centro de Asimilaci&oacute;n Tecnol&oacute;gica</a>: Av. Dr Jorge Jim&eacute;nez Cant&uacute;, INFONAVIT Nte. 54729 Cuautitl&aacute;n Izcalli, Edo. de M&eacute;x.
          </p>
        </address> 
      </div>
      <!--COLUMNA DESCARGAS-->              
      <div class="col-lg-3 col-sm-3 address wow fadeInUp">
                   <h1>DescargaS FESC</h1>
                   <div class="tweet-box">
                     <i class="fa fa"></i>
                     <em><a href="http://www.cuautitlan.unam.mx/zona_descargas.html">Suite Orquestal FES Cuautitl&aacute;n</a></em>
                   </div>
                   <div class="tweet-box">
                     <i class="fa fa"></i>
                     <em>
                     <a href="https://www.youtube.com/watch?v=MR2VqRfOQLs" target="_blank">Video Somos la Universidad de la Nación</a> </em>
                   </div>
                   <div class="tweet-box">
                     <i class="fa fa"></i>
                     <em>
                     <a href="https://www.youtube.com/watch?v=pSEWafE5Sy0" target="_blank">Video Hist&oacute;rico del 77 encuentro de Ciencias Artes y Humanidades</a> </em>
                   </div>
                   <div class="tweet-box">
                     <i class="fa fa"></i>
                     <em>
                     <a href="http://www.cuautitlan.unam.mx/descargas/principal/Directorio_FESC.pdf" target="_blank"> Directorio telef&oacute;nico</a> </em>
                   </div>
                   <div class="tweet-box">
                     <i class="fa fa"></i>
                     <em>
                     <a href="http://www.cuautitlan.unam.mx/zona_descargas.html">Reglamentos</a> </em>
                   </div>
                   <div class="tweet-box">
                     <i class="fa fa"></i>
                     <em>
                     <a href="http://www.cuautitlan.unam.mx/zona_descargas.html">Logotipos</a> </em>
                   </div>
      </div>
      <!-- FOOTER MENU RAPIDO -->
      <div class="col-lg-3 col-sm-3 address wow fadeInUp">
        <h1>MEN&Uacute; R&Aacute;PIDO</h1>
        <ul class="page-footer-list">
          <li>
            <i class="fa fa-angle-right"></i>
            <a href="http://www.cuautitlan.unam.mx/licenciaturas/">Licenciaturas</a>
          </li>
          <li>
              <i class="fa fa-angle-right"></i>
              <a href="http://www.cuautitlan.unam.mx/posgrado/">Posgrado</a>
          </li>
          <li>
            <i class="fa fa-angle-right"></i>
            <a href="http://www.cuautitlan.unam.mx/educon/">Educaci&oacute;n Continua </a>
          </li>
          <li>
            <i class="fa fa-angle-right"></i>
              <a href="http://www.cuautitlan.unam.mx/comite_editorial/">Comité Editorial</a>
          </li>
          <li>
            <i class="fa fa-angle-right"></i>
            <a href="http://avalon.cuautitlan.unam.mx/biblioteca/" target="_blank"> Biblioteca</a>
          </li>
          <li>
            <i class="fa fa-angle-right"></i>
            <a href="http://www.cuautitlan.unam.mx/difusion_cultural/"> Difusi&oacute;n Cultural</a>
          </li>
          <li>
            <i class="fa fa-angle-right"></i>
            <a href="http://www.cuautitlan.unam.mx/deporte/"> Deportes</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-sm-3 address wow fadeInUp">
          <address>
              <p>
              Hecho en México, todos los derechos reservados 2018. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica. De otra forma requiere permiso previo por escrito de la institución.
              </p>
              <hr>
              <p><a href="aviso.html">Aviso de privacidad</a></p>
              <hr>
              <p><i class="fa fa-envelope pr-10"></i><a href="mailto:medios_diseno_fesc@yahoo.com?subject=Feedback" target="_blank"> Comentarios y sugerencias para mejorar el portal web.</a></p>
          <address>
      </div>
          
    </div>
  </div>
</footer>     
<!--small footer start -->
<footer class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                  <li><a href="https://www.facebook.com/Fescunamoficial-283788311818635/?ref=hl" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/FESC_UNAM" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCORpUwvwlIiv8Oacp9Xt8RA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
             <div class="col-md-5">
              <div class="copyright">
                <?php echo $copy_text_1; ?>
              </div>
            </div>
        </div>
    </div>
</footer>
<?php
